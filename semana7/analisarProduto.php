<?php
use Elani\Comex\semana7\Classes\Produto;

use Elani\Comex\semana7\Classes\Pedido;
use Elani\Comex\semana7\Classes\Cliente;


$livros = [
    '978-8532530783' => [
        'nome' => 'Harry Potter e a pedra filosofal',
        'preco' => 32.30,
        'qtd_estoque' => 250
    ],

    '978-8532530790' => [
        'nome' => 'Harry Potter e a câmara secreta',
        'preco' => 32.30,
        'qtd_estoque' => 150
    ],
    '978-8532530806' => [
        'nome' => 'Harry Potter e o prisioneiro de Azkaban',
        'preco' => 53.51,
        'qtd_estoque' => 200
    ],

    '978-8532530813' => [
        'nome' => 'Harry Potter e o cálice de fogo',
        'preco' => 39.99,
        'qtd_estoque' => 200
    ],
    '978-8532530820' => [
        'nome' => 'Harry Potter e a ordem da Fênix',
        'preco' => 59.99,
        'qtd_estoque' => 50
    ],

    '978-8532530837' => [
        'nome' => 'Harry Potter e o enigma do príncipe',
        'preco' => 42.89,
        'qtd_estoque' => 20
    ],
    '978-8532530844' => [
        'nome' => 'Harry Potter e as relíquias da morte',
        'preco' => 55.89,
        'qtd_estoque' => 0
    ],
];
function encontrar_maior_menor_preco($livros) {
    $livro_mais_caro = current($livros);
    $livro_mais_barato = current($livros);

    foreach ($livros as $isbn => $livro) {
        if ($livro['preco'] > $livro_mais_caro['preco']) {
            $livro_mais_caro = $livro;
        }

        if ($livro['preco'] < $livro_mais_barato['preco']) {
            $livro_mais_barato = $livro;
        }
    }

    echo "O livro mais caro é '{$livro_mais_caro['nome']}' com preço de {$livro_mais_caro['preco']} ". PHP_EOL;
    echo "O livro mais barato é '{$livro_mais_barato['nome']}' com preço de {$livro_mais_barato['preco']}". PHP_EOL . PHP_EOL;
}


// chamando a função
encontrar_maior_menor_preco($livros);

//Desconto
function calcular_desconto($livros, $desconto) {
    foreach ($livros as $isbn => $livro) {
        $preco_com_desconto = $livro['preco'] * (1 - $desconto/100);
        echo "O livro '{$livro['nome']}' com desconto custa {$preco_com_desconto} ". PHP_EOL;
    }
}
// Define a porcentagem de desconto
$desconto = 10;

calcular_desconto($livros, $desconto);
