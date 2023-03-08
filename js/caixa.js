class ListaModel {

    constructor(novaLista = []) {
        this.lista = novaLista
    }

    // o método adicionaItem recebe um objeto do tipo Item e adiciona no array lista
    adicionaItem(item) {
        this.lista.push(item)
    }
}

class ListaView {

    constructor(listaItens = []) {
        this.lista = listaItens
    }

    adicionaItem(item) {
        this.lista.push(item)
    }

    // o método preencheTabelaModal é responsável por varrer o array lista e preencher a view/tela do usuário, nesse caso criando linhas na tabela lá no html
    preencheTabelaModal(lista) {
        // seleciona a tag que conterá a lista de itens no modal
        const tagTbodyModal = document.querySelector('#listaModal')

        // zerando conteúdo da tabela do modal
        tagTbodyModal.innerHTML = ''

        lista.forEach(item => {
            tagTbodyModal.insertAdjacentHTML('beforeend', `<tr>
                <td>${item.descricao}</td>
                <td>${item['estoque-atual']}</td>
                <td>
                    <button class="btn btn-secondary"
                    onclick='listaController.adicionaItem(${JSON.stringify(item)})'>
                        +
                    </button>
                </td>
            </tr>`)
        });
    }

    adicionaItemNaTela(item) {
        const tagHtml = document.querySelector('#tbody')

        tagHtml.insertAdjacentHTML('beforeend', `<tr>
                <td>${item.descricao}</td>
                <td>${item.venda}</td>
                <td>${item.venda}</td>
                <td><button class="btn btn-danger">x</button></td>
            </tr>`)

        modal.hide()
    }
}

class ListaController {

    constructor() {
        this.listaModel = new ListaModel()
        this.listaView = new ListaView()
    }

    adicionaItem(item) {
        this.listaModel.adicionaItem(item)
        this.listaView.adicionaItem(item)
        this.listaView.adicionaItemNaTela(item)
    }

    buscaProdutos(event) {

        // evitando recarregamento da página
        event.preventDefault()

        // pegando o valor do input pesquisar
        let termoDeBusca = $('#pesquisar').val()

        // fazendo chamada AJAX para o banco
        $.ajax({
            url: "../../crud/produto/buscarProduto.php?pesquisar=" + termoDeBusca,
            type: "GET",
            dataType: "json",
            success: function (dados) {

                // cria um objeto do tipo ListaView para manipular os dados na interface
                let listaView = new ListaView()

                // preenche a tabela do modal
                listaView.preencheTabelaModal(dados)

                // chama o modal
                modal.show()
            },
            error: function (jqXHR, status, error) {
                // imprime erro no console
                console.log(jqXHR, status, error)
            }
        })
    }
}

// cria um elemento modal
const modal = new bootstrap.Modal(document.getElementById('modalPadrao'))

const listaController = new ListaController()