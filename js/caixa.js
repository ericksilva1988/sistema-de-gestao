class ListaModel {

    constructor(novaLista) {
        this.lista = novaLista
    }

    // o método adicionaItem recebe um objeto do tipo Item e adiciona no array lista
    adicionaItem(item) {
        this.lista.push(item)
    }
}

class ListaView {

    constructor(listaItens) {
        this.lista = listaItens
    }

    // o método preencheTabela é responsável por varrer o array lista e preencher a view/tela do usuário, nesse caso criando linhas na tabela lá no html
    preencheTabela(tagHtml) {
        this.lista.forEach(item => {
            tagHtml.insertAdjacentHTML('beforeend', `<tr>
                <td>${item.descricao}</td>
                <td>${item.venda}</td>
                <td>${item.venda}</td>
            </tr>`)
        });
    }

    adicionaItem(item, tagHtml) {
        tagHtml.insertAdjacentHTML('beforeend', `<tr>
                <td>${item.descricao}</td>
                <td>${item.venda}</td>
                <td>${item.venda}</td>
            </tr>`)
    }
}

class ListaController {

    buscarProdutos(event) {

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
                // guarda os dados numa variável lista
                let lista = dados

                // cria um array para interagir com o banco de dados
                let listaModel = new ListaModel(lista)

                // cria um objeto do tipo ListaView para manipular os dados na interface
                let listaView = new ListaView(lista)

                // cria um elemento modal
                const modal = new bootstrap.Modal(document.getElementById('modalPadrao'))

                // seleciona a tag que conterá a lista de itens no modal
                const tagTbodyModal = document.querySelector('#listaModal')
                
                // zerando conteúdo da tabela do modal
                tagTbodyModal.innerHTML = ''
                
                // preenche a tabela do modal
                listaView.preencheTabela(tagTbodyModal)

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

// a constante bodyTabela está selecionando a tag html <tbody> que possui o id='tbody', para que seja possível inserir linhas <tr> dentro dela
const tagTbody = document.querySelector('#tbody')

const listaController = new ListaController()