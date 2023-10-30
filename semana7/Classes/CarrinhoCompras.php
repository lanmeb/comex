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

    $livros = new Produto('978-8532530851', 'Harry Potter e a criança amaldiçoada', 45.90, 100);
    
    $livros = adicionarTitulo($livros,'978-8532530851', 'Harry Potter e a criança amaldiçoada', 45.90, 100);
    $livros = removerExemplar($livros, '978-8532530820');
    $livros = adicionarExemplar($livros, '978-8532530844');



///array
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

    
    public function adicionarProduto($produto) {
        array_push($this->produtos, $produto);
    }

    public function removerProduto($produto) {
        if(($key = array_search($produto, $this->produtos)) !== false) {
            unset($this->produtos[$key]);
        }
    }


    public function calcularDesconto() {
        try{
        if ($desconto < 0 || $desconto > 100) {
        throw new Exception('O desconto deve estar entre 0 e 100');
           
        $desconto = $this->preco * ($descontoPercentual / 100);
        return $this->preco - $desconto;
        }
        }
    }

    
    public function calcularTotal() {
        // Implemente a lógica para calcular o total da compra aqui
    }
}*/
