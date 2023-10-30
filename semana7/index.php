<?php

require_once __DIR__.'/autoload.php';
use Elani\Comex\semana7\Classes\Cliente;


//Objeto Cliente
$cliente = new Cliente("Elania", "email@email.com", "(11) 8765-9489", "Rua das Flores", 100.00, $pedidos);
 echo "Nome: " . $cliente->getNome() . "\n". PHP_EOL;
 echo "Email: " . $cliente->getEmail() . "\n". PHP_EOL;
 echo "Telefone: " . $cliente->getCelular() . "\n". PHP_EOL;
 echo "Endereço: " . $cliente->getEndereco() . "\n". PHP_EOL;
 echo "Total Compras R$: " . $cliente->getTotalCompras() . "\n". PHP_EOL;

$produto = new Produto ('Harry Potter e a criança amaldiçoada', 99.99, 100);
echo "Nome do Produto: " . $produto->getNome() . "\n";
echo "Preço: " . $produto->getPreco() . "\n";
echo "Quantidade em Estoque: " . $produto->getQtdEstoque() . "\n";

