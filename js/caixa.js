class ItemModel {
    
    // atributos do item da compra
    id
    descricao
    valorUni

    // método construtor. Quando um Item for criado, ele espera os parâmetros id, descrição e valor, e ele retornará um objeto do tipo Item
    constructor(id, descricao, valorUni) {
        this.id = id
        this.descricao = descricao
        this.valorUni = valorUni
    }
}

class ListaModel {

    // a classe ListaModel inicializa um array vazio chamado lista
    lista = []

    // o método adicionaItem recebe um objeto do tipo Item e adiciona no array lista
    adicionaItemNoArray(item) {
        this.lista.push(item)
    }
}

class ListaView {
    novaLista

    constructor (listaItens) {
        this.novaLista = listaItens
    }

    // o método preencheTabela é responsável por varrer o array lista e preencher a view/tela do usuário, nesse caso criando linhas na tabela lá no html
    preencheTabela(tagHtml) {
        this.novaLista.lista.forEach(item => {
            tagHtml.insertAdjacentHTML('beforeend', `<tr>
                <td>${item.descricao}</td>
                <td>${item.valorUni}</td>
                <td>${item.valorUni}</td>
            </tr>`)
        });
    }

    // o método adicionaItemNaTabela recebe os parâmetros id, descrição e valorUni. Ele 
    adicionaItemNaTabela (id, descricao, valorUni) {
        let item = new ItemModel(id, descricao, valorUni)
        this.novaLista.adicionaItemNoArray(item)
        tagTbody.innerHTML = ''
        this.preencheTabela(tagTbody)
    }
}

// a constante bodyTabela está selecionando a tag html <tbody> que possui o id='tbody', para que seja possível inserir linhas <tr> dentro dela
const tagTbody = document.querySelector('#tbody')

// a constante novaCompra recebe uma instância de ListaItens, agora ela é um objeto que guarda uma lista vazia e possui os métodos de adicionar na lista
const novaLista = new ListaModel()

// a constante view recebe uma instância de View, que possui métodos próprios para manipular a interface do usuário
const view = new ListaView(novaLista)