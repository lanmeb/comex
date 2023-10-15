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
foreach ($livros as $isbn => $detalhes)
{
    echo "Nome: " . $detalhes['nome'] . "\n";
    echo "Quantidade em estoque: " . $detalhes['qtd_estoque'] . "\n\n";
}

//verifica quantidade de exemplares
function totalEstoque($livros) {
    $total = 0;
    foreach ($livros as $livro) {
        $total += $livro['qtd_estoque'];
    }
    return $total;
}
echo "Total de livros: ". totalEstoque($livros)." exemplares.\n". PHP_EOL;

//Adicionando exemplares
echo "Adicionando exemplares \n" . PHP_EOL;
function adicionarExemplar($livros, $indiceProduto) {
    $livros[$indiceProduto]['qtd_estoque'] += 10;
    return $livros;
}

$livros = adicionarExemplar($livros, '978-8532530844');
foreach($livros as $chave => $livro) {
    echo "ISBN: $chave - {$livro['nome']}, \n Quantidade em estoque: {$livro['qtd_estoque']} \n" . PHP_EOL;
}
echo "Total de livros: ". totalEstoque($livros)." exemplares.\n". PHP_EOL;

//Removendo exemplares
echo "Removendo exemplares \n" . PHP_EOL;
function removerExemplar($livros, $indiceProduto) {
    $livros[$indiceProduto]['qtd_estoque'] -= 5;
    return $livros;
}
$livros = removerExemplar($livros, '978-8532530820');
foreach($livros as $chave => $livro) {
    echo "ISBN: $chave - {$livro['nome']}, \n Quantidade em estoque: {$livro['qtd_estoque']}" . PHP_EOL;
}
echo "Total de livros: ". totalEstoque($livros)." exemplares.\n". PHP_EOL;

//adicionar título
echo "Adicionando título \n\n";
function adicionarTitulo($livros, $isbn, $nome, $preco, $qtd_estoque)
{
    $livros[$isbn] = [
        'nome' => $nome,
        'preco' => $preco,
        'qtd_estoque' => $qtd_estoque
    ];
    return $livros;
}
($livros = adicionarTitulo($livros,'978-8532530851', 'Harry Potter e a criança amaldiçoada', 45.90, 100));

$livros = adicionarExemplar($livros, '978-8532530851');
foreach($livros as $chave => $livro) {
    echo "ISBN: $chave - {$livro['nome']}, \n Quantidade em estoque: {$livro['qtd_estoque']} \n" . PHP_EOL;
}
echo "Total de livros: ". totalEstoque($livros)." exemplares.\n". PHP_EOL;
// Verificando a disponibilidade de um produto

function verificarDisponibilidade($isbn, $estoque) {
    return isset($estoque[$isbn]) ? $estoque[$isbn]['qtd_estoque'] > 0 : false ;
}
PHP_EOL;
$isbn = '978-8532530790';
if (verificarDisponibilidade($isbn, $livros)) {
    echo "O livro '{$livros[$isbn]['nome']}' está disponível em estoque. \n Quantidade disponível: {$livros[$isbn]['qtd_estoque']} " . PHP_EOL;
} else {
    echo "\n O livro '{$livros[$isbn]['nome']}' não está disponível em estoque.";
}
//mostrar preço
foreach ($livros as $isbn => $detalhes) {
    echo "O livro {$detalhes['nome']} custa R$ {$detalhes['preco']}" . PHP_EOL;
 };