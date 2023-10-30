<?php
namespace Elani\Comex\semana7\Classes;

class Pedido
{
    public function __construct(
        private int $id,
        private string $cliente,
        private string $produtos
       
    )  {}

    public function getId() {
        return $this->id;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getProdutos() {
        return $this->produtos;
    }

}