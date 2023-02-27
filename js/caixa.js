class Item {
    
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

class ListaItens {

    // a classe ListaItens inicializa um array vazio chamado lista
    lista = []

    // o método adicionaItem recebe um objeto do tipo Item e adiciona no array lista
    adicionaItemNoArray(item) {
        this.lista.push(item)
    }

    // o método preencheTabela é responsável por varrer o array lista e preencher a view/tela do usuário, nesse caso criando linhas na tabela lá no html
    preencheTabela(tagHtml) {
        this.lista.forEach(item => {
            tagHtml.insertAdjacentHTML('beforeend', `<tr>
                <td>${item.descricao}</td>
                <td>${item.valorUni}</td>
                <td>${item.valorUni}</td>
            </tr>`)
        });
    }

    adicionaItemNaTabela (id, descricao, valorUni) {
        // let item = new Item(id, descricao, valorUni)
        // novaCompra.adicionaItemNoArray(item)
        // bodyTabela.innerHTML = ''
        // novaCompra.preencheTabela(bodyTabela)
        console.log(id, descricao, valorUni)
    }
}

// a variável novaCompra recebe uma instância de ListaItens, agora ela é um objeto que guarda uma lista vazia e possui os métodos de adicionar na lista e preencher a tabela html
let novaCompra = new ListaItens()

// a variável bodyTabela está selecionando a tag html <tbody> que possui o id='dados', para que seja possível inserir linhas <tr> dentro dela
let bodyTabela = document.querySelector('#dados')

let produto1 = new Item(1, 'caneta', 2)
novaCompra.adicionaItemNoArray(produto1)
novaCompra.preencheTabela(bodyTabela)

bodyTabela.innerHTML = ''
let produto2 = new Item(2, 'lapis', 5)
novaCompra.adicionaItemNoArray(produto2)
novaCompra.preencheTabela(bodyTabela)