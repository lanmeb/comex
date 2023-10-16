<?php

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
    // Inicializa o livro mais caro e mais barato como o primeiro livro do array
    $livro_mais_caro = current($livros);
    $livro_mais_barato = current($livros);

    // Itera sobre os livros restantes no array
    foreach ($livros as $isbn => $livro) {
        // Se o preço do livro atual é maior que o do livro mais caro, atualiza o livro mais caro
        if ($livro['preco'] > $livro_mais_caro['preco']) {
            $livro_mais_caro = $livro;
        }

        // Se o preço do livro atual é menor que o do livro mais barato, atualiza o livro mais barato
        if ($livro['preco'] < $livro_mais_barato['preco']) {
            $livro_mais_barato = $livro;
        }
    }

    // Imprime o nome e o preço do livro mais caro e mais barato
    echo "O livro mais caro é '{$livro_mais_caro['nome']}' com preço de {$livro_mais_caro['preco']} ". PHP_EOL;
    echo "O livro mais barato é '{$livro_mais_barato['nome']}' com preço de {$livro_mais_barato['preco']}";
}

// chamando a função
encontrar_maior_menor_preco($livros);
