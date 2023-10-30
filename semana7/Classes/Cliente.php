<?php 
namespace Elani\Comex\semana7\Classes;
use InvalidArgumentException, LogicException;
class Cliente 
{
    public function __construct(
        private string $nome,
        private string $email,
        private string $celular,
        private string $endereco,
        private float $totalCompras,
        private array $pedidos

    )  {}

    public function getNome(): string {
        return $this->nome;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function getCelular(): string {
        return preg_replace('/^(\d{2})(\d{5})(\d{4})$/', "($1) $2-$3", $this->celular);
    }
    public function getEndereco(): string {
        return $this->endereco;
    }
    public function getTotalCompras(): float {
        return $this->totalCompras;
    }
    public function getPedidos(): array{
        return $this->pedidos;
    }
    public function setEmail(string $email): void {
        $this->email = $email;
    }
    public function setCelular(string $celular): void {
        $this->celular = $celular;
    }
    public function setEndereco(string $endereco): void {
        $this->endereco = $endereco;
    }

}

//Objeto Cliente
$cliente = new Cliente("Elania", "email@email.com", "(11) 8765-9489", "Rua das Flores", 100.00, $pedidos);
 echo "Nome: " . $cliente->getNome() . "\n". PHP_EOL;
 echo "Email: " . $cliente->getEmail() . "\n". PHP_EOL;
 echo "Telefone: " . $cliente->getCelular() . "\n". PHP_EOL;
 echo "Endereço: " . $cliente->getEndereco() . "\n". PHP_EOL;
 echo "Total Compras R$: " . $cliente->getTotalCompras() . "\n". PHP_EOL;
 echo "Os pedidos  são: ". $cliente->getPedidos() .  "\n". PHP_EOL;
 


