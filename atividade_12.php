<?php

function analisarProdutos($produtos, $pesquisa)
{
    $maiorPreco = max($produtos);
    $menorPreco = min($produtos);

    $produtoMaisCaro = array_search($maiorPreco, $produtos);
    $produtoMaisBarato = array_search($menorPreco, $produtos);

    $media = array_sum($produtos) / count($produtos);

    echo "Produto mais caro: $produtoMaisCaro - R$ $maiorPreco <br>";
    echo "Produto mais barato: $produtoMaisBarato - R$ $menorPreco <br>";
    echo "Média dos preços: R$ " . number_format($media, 2, ',', '.') . "<br>";

    if (isset($produtos[$pesquisa])) {
        echo "Produto encontrado: $pesquisa - R$ " . $produtos[$pesquisa];
    } else {
        echo "Produto não encontrado.";
    }
}

echo "<h3>Exercício 12</h3>";

$produtos = [
    "Arroz" => 28.90,
    "Feijão" => 9.50,
    "Macarrão" => 6.80,
    "Leite" => 5.90
];

analisarProdutos($produtos, "Feijão");

echo "<hr>";

?>