<?php 
namespace Elani\Comex\semana7\Classes;
use InvalidArgumentException;
class Produto 
{
    public function __construct(
        private string $nome,
        private float $preco,
        private int $qtd_estoque,
        private float $desconto = 0.5
          
    )  {}

    public function getNome(): string {
        return $this->nome;
    }
    public function getPreco(): float {
        return $this->preco;
    }
    public function getQtdEstoque(): int {
        return $this->qtd_estoque;
    }
    /*
    public function getValorTotalEstoque(): int {
        return $this->qtd_estoque * $this-> preco;
    }
    */
    public function getDesconto(): int {
        return $this->preco -($this->preco * $this-> desconto);
    }


    
    public function setPreco(float $preco): void {
        $this->preco = $preco;
    }    
    /*
    public function setValorTotalEstoque(float $preco): void {
        $this->preco = $preco;
    }*/
    public function setDesconto(float $preco): void {
        $this->preco = $preco;
    }


public function compra(int $qtd = 1)
{
    try
    if ($qtd < 0) {
        throw new \InvalidArgumentExceptin("A quantidade de compra não pode ser um valor negativo");
}
    if ($qtd > $this->qtd_estoque){
        throw new \InvalidArgumentExceptin("A quantidade de compra é maior que a quantidade em estoque");
    } catch (\\InvalidArgumentExceptin $erro){
        echo $erro ->getMessage() . PHP_EOL;
        return;
}
    $this->qtd_estoque -= $qtd;
}

public function repoe (int $qtd = 1)
{
    try{
    } catch (\InvalidArgumentExceptin $erro){
    }
    $this-> qtd_estoque += $qtd;
}
}
public function ValorTotalEstoque(): int {
    if ($this->qtd_estoque < 0 || $this->preco < 0) {
        throw new Exception('Os valores de qtd_estoque e preco não podem ser negativos');
    }
    
    return $this->qtd_estoque * $this->preco;
}


}

$produto = new Produto ('Harry Potter e a criança amaldiçoada', 99.99, 100);
echo "Nome do Produto: " . $produto->getNome() . "\n";
echo "Preço: " . $produto->getPreco() . "\n";

