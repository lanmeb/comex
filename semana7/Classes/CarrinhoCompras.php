<?php
namespace Elani\Comex\semana7\Classes;

class CarrinhoDeCompras {
    
    public function __construct(
        private array $produtos = []
    ) {
       
    }
    public function getProdutos(): array {
        return $this->produtos;
    }
    public function setProdutos(string $email): void {
        $this->produtos = array();
    }

}/*

    $livros = [
        '978-8532530783' => [
            'nome' => 'Harry Potter e a pedra filosofal',
            'preco' => 32.30,
            'qtd_estoque' => 250
        ],
        
        '978-8532530844' => [
        'nome' => 'Harry Potter e as relíquias da morte',
        'preco' => 55.89,
        'qtd_estoque' => 0
    ],
];
*/


    $livros = new Produto('978-8532530851', 'Harry Potter e a criança amaldiçoada', 45.90, 100);
    

    $livros = adicionarTitulo($livros,'978-8532530851', 'Harry Potter e a criança amaldiçoada', 45.90, 100);
    $livros = removerExemplar($livros, '978-8532530820');
    $livros = adicionarExemplar($livros, '978-8532530844');

/*

    $produtos = array('Produto 1', 'Produto 2', 'Produto 3', 'Produto 4');
    
function inserirPedido($pedidos, $id, $cliente, $produtos)
{
    $pedido = new Pedido($id, $cliente, $produtos);
    array_push($pedidos, $pedido);
    return $pedidos;
}

/*
$pedidos = array();
$pedidos = inserirPedido($pedidos, 1, 'Cliente 1', $produtos);

foreach ($pedidos as $pedido) {
    echo "ID do Pedido: " . $pedido->getId() . "\n";
    echo "Cliente: " . $pedido->getCliente() . "\n";
    echo "Produtos: \n";
   
}/*
*//*
    public function adicionarProduto($produto) {
        array_push($this->produtos, $produto);
    }

    public function removerProduto($produto) {
        if(($key = array_search($produto, $this->produtos)) !== false) {
            unset($this->produtos[$key]);
        }
    }

    public function calcularDesconto() {
        // Implemente a lógica para calcular o desconto aqui
    }

    public function calcularFrete() {
        // Implemente a lógica para calcular o frete aqui
    }

    public function calcularTotal() {
        // Implemente a lógica para calcular o total da compra aqui
    }
}*/