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

function adicionarTitulo($livros, $isbn, $nome, $preco, $qtd_estoque)
{
    $livros[$isbn] = ['nome' => $nome,'preco' => $preco,'qtd_estoque' => $qtd_estoque];
    return $livros;
}
function removerExemplar($livros, $indiceProduto) {
    $livros[$indiceProduto]['qtd_estoque'] -= 5;
    return $livros;
}
function adicionarExemplar($livros, $indiceProduto) {
    $livros[$indiceProduto]['qtd_estoque'] += 5;
    return $livros;
}

$livros = adicionarTitulo($livros,'978-8532530851', 'Harry Potter e a criança amaldiçoada', 45.90, 100);
$livros = removerExemplar($livros, '978-8532530820');
$livros = adicionarExemplar($livros, '978-8532530844');

var_dump($livros);


function disponibilidade($livros, $indiceProduto) 
{
    echo "O livro" . $livros[$indiceProduto]['nome'] ." está disponível em estoque. \n Quantidade disponível: ". $livros[$indiceProduto]['qtd_estoque'] ." ." . PHP_EOL;
}

disponibilidade($livros, '978-8532530844');
function totalEstoque($livros) {
    $total = 0;
    foreach ($livros as $livro) {
        $total += $livro['qtd_estoque'];
    }
    return $total;
}
echo "Total de livros: ". totalEstoque($livros)." exemplares.\n". PHP_EOL;

