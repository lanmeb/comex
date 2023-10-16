<?php

$livros = [
    '978-8532530783' => [
        'nome' => 'Harry Potter e a pedra filosofal',
        'preco' => 32.30
    ],

    '978-8532530790' => [
        'nome' => 'Harry Potter e a câmara secreta',
        'preco' => 32.30
    ],
    '978-8532530806' => [
        'nome' => 'Harry Potter e o prisioneiro de Azkaban',
        'preco' => 53.51
    ],

    '978-8532530813' => [
        'nome' => 'Harry Potter e o cálice de fogo',
        'preco' => 39.99
    ],
    '978-8532530820' => [
        'nome' => 'Harry Potter e a ordem da Fênix',
        'preco' => 59.99
    ],

    '978-8532530837' => [
        'nome' => 'Harry Potter e o enigma do príncipe',
        'preco' => 42.89
    ],
    '978-8532530844' => [
        'nome' => 'Harry Potter e as relíquias da morte',
        'preco' => 55.89
    ],
];

foreach ($livros as $isbn => $detalhes) {
    echo "O livro {$detalhes['nome']} custa R$ {$detalhes['preco']}" . PHP_EOL;
 };
 
echo "Quantidade de títulos:" .count($livros). PHP_EOL;
