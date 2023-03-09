class ListaModel {

    constructor(novaLista = []) {
        this.lista = novaLista
    }

    // o método adicionaItem recebe um objeto do tipo Item e adiciona no array lista
    adicionaItem(item) {
        this.lista.push(item)
    }

    updateLista(novaLista) {
        this.lista = novaLista
    }
}

class ListaView {

    templateModal(model) {
        return model.lista.map(item => {
            return `
                <tr>
                    <td>${item.descricao}</td>
                    <td>${item['estoque-atual']}</td>
                    <td>
                        <button class="btn btn-secondary"
                        onclick='listaController.adicionaItem(${JSON.stringify(item)})'>
                            +
                        </button>
                    </td>
                </tr>
            `
        }).join('')
    }

    updateModal(model) {
        const tagTbodyModal = document.querySelector('#tBodyModal')
        tagTbodyModal.innerHTML = this.templateModal(model)
        modal.show()
    }

    templateTela(model) {
        return model.lista.map((item, index) => {
            return `
                <tr>
                    <td>${item.descricao}</td>
                    <td>${item.venda}</td>
                    <td>
                        <button class="btn btn-danger"
                        onclick='listaController.removeItem(${item.venda},${index})'>
                            x
                        </button>
                    </td>
                </tr>
            `
        }).join('')
    }

    updateTela(model) {
        const tagTbodyTela = document.querySelector('#tBodyTela')
        tagTbodyTela.innerHTML = this.templateTela(model)
        modal.hide()
    }
}

class ListaController {

    constructor() {
        this.listaModalModel = new ListaModel()
        this.listaTelaModel = new ListaModel()

        this.listaModalView = new ListaView()
        this.listaTelaView = new ListaView()

        this.total = 0.0
    }

    updateValorTotal() {
        const tagHtmlTotal = document.querySelector('#total')
        tagHtmlTotal.innerHTML = this.total.toFixed(2)
    }

    somaValor(valor) {
        this.total += parseFloat(valor)
    }

    subtraiValor(valor) {
        this.total -= parseFloat(valor)
    }

    adicionaItem(item) {
        this.listaTelaModel.adicionaItem(item)
        this.listaTelaView.updateTela(this.listaTelaModel)
        this.somaValor(item.venda)
        this.updateValorTotal()
    }

    removeItem(valor, index) {
        this.listaTelaModel.lista.splice(index, 1)
        this.listaTelaView.updateTela(this.listaTelaModel)
        this.subtraiValor(valor)
        this.updateValorTotal()
    }

    async updateLista(event) {
        // evitando recarregamento da página
        event.preventDefault()

        var dados = await this.fazerConsulta()

        if (dados.length === 1) {
            this.adicionaItem(dados[0])
        }
        else {
            this.listaModalModel.updateLista(dados)
            this.listaModalView.updateModal(this.listaModalModel)
        }
    }

    fazerConsulta() {
        // pegando o valor do input pesquisar
        let termoDeBusca = $('#pesquisar').val()
        // fazendo chamada AJAX para o banco
        return new Promise(function (resolve, reject) {
            $.ajax({
                url: "../../crud/produto/buscarProduto.php?pesquisar=" + termoDeBusca,
                type: "GET",
                dataType: "json",
                success: function (dados) {
                    resolve(dados)
                },
                error: function (jqXHR, status, error) {
                    // imprime erro no console
                    reject(jqXHR, status, error)
                }
            })
        })

    }

    enviaNotaPorWhatsapp () {
        let numero = '+5582996966317'
        let nota = this.templateNota()
        let apiWhatsapp = `https://api.whatsapp.com/send?phone=${numero}&text=${nota}`
        console.log(apiWhatsapp)
        window.location.href = apiWhatsapp
    }

    templateNota () {
        return this.listaTelaModel.lista.map(item => {
            return `
                ${item.descricao} - R$ ${item.venda}
            `
        }).join('')
    }
}

const modal = new bootstrap.Modal(document.getElementById('modalPadrao'))

const listaController = new ListaController()