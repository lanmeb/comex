<?php 
namespace Elani\Comex;
class Pedido {
    private $id;
    private $cliente;
    private $produtos;

    public function __construct($id, $cliente, $produtos) {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->produtos = $produtos;
    }

    public function getId() {
        return $this->id;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getProdutos() {
        return $this->produtos;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setProdutos($produtos) {
        $this->produtos = $produtos;
    }

}
$produtos = array('Produto 1', 'Produto 2', 'Produto 3', 'Produto 4');
function inserirPedido($pedidos, $id, $cliente, $produtos)
{
    $pedido = new Pedido($id, $cliente, $produtos);
    array_push($pedidos, $pedido);
    return $pedidos;
}


$pedidos = array();
$pedidos = inserirPedido($pedidos, 1, 'Cliente 1', $produtos);

foreach ($pedidos as $pedido) {
    echo "ID do Pedido: " . $pedido->getId() . "\n";
    echo "Cliente: " . $pedido->getCliente() . "\n";
    echo "Produtos: \n";
   
}