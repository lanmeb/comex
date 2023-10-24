<?php 
namespace Elani\Comex;

class Produto {
    private string $nome;
    private float $preco;
    private int $qtdEstoque;
    
    public function __construct(string $nome, float $preco, int $qtdEstoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->qtdEstoque = $qtdEstoque;
             
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function getQtdEstoque(): int {
        return $this->qtdEstoque;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setPreco(float $preco): void {
        $this->preco = $preco;
    }

    public function setQtdEstoque(int $qtdEstoque): void {
        $this->qtdEstoque = $qtdEstoque;
    }
   
}

//inserir produtos
function inserirProduto($produtos, $nome, $preco, $qtdEstoque)
{
    $produto = new Produto($nome, $preco, $qtdEstoque);
    array_push($produtos, $produto);
    return $produtos;
}

$produtos = [];
$produtos = inserirProduto($produtos, 'Harry Potter e a criança amaldiçoada', 99.99, 100);

foreach ($produtos as $produto) {
    echo "Nome do Produto: " . $produto->getNome() . "\n";
    echo "Preço: " . $produto->getPreco() . "\n";
    echo "Quantidade em Estoque: " . $produto->getQtdEstoque() . "\n";
}

//remover quantidades do produto
function removerQuantidadeProduto($produtos, $nome, $quantidade)
{
    foreach ($produtos as $produto) {
        if ($produto->getNome() == $nome) {
            $qtdEstoqueAtual = $produto->getQtdEstoque();
            if ($qtdEstoqueAtual >= $quantidade) {
                $produto->setQtdEstoque($qtdEstoqueAtual - $quantidade);
                echo "Quantidade removida do produto: " . $nome . "\n";
            } else {
                echo "Não há quantidade suficiente do produto: " . $nome . "\n";
            }
        }
    }
    return $produtos;
}

$produtos = removerQuantidadeProduto($produtos, 'Harry Potter e a criança amaldiçoada', 5);

foreach ($produtos as $produto) {
    //echo "Nome do Produto: " . $produto->getNome() . "\n";
   // echo "Preço: " . $produto->getPreco() . "\n";
    echo "Quantidade em Estoque: " . $produto->getQtdEstoque() . "\n";
}


function valorTotalEmEstoque($produtos)
{
    $valorTotal = 0;
    foreach ($produtos as $produto) {
        $valorTotal += $produto->getPreco() * $produto->getQtdEstoque();
    }
    return $valorTotal;
}

$valorTotal = valorTotalEmEstoque($produtos);
echo "Valor total em estoque: " . $valorTotal . "\n";

//remover todos os produtos

function removerProduto($produtos, $nome)
{
    foreach ($produtos as $key => $produto) {
        if ($produto->getNome() == $nome) {
            unset($produtos[$key]);
            echo "Produto removido: " . $nome . "\n";
        }
    }
    return $produtos;
}

$produtos = removerProduto($produtos, 'Harry Potter e a criança amaldiçoada');
/*

function adicionarLivro($livros, $isbn, $nome, $preco, $qtd_estoque)
{
    $livros[$isbn] = [
        'nome' => $nome,
        'preco' => $preco,
        'qtd_estoque' => $qtd_estoque
    ];
    return $livros;
}
($livros = adicionarLivro($livros,'978-8532530851', 'Harry Potter e a criança amaldiçoada', 45.90, 100));
*/


