<?php

//inclui classe Produto
include_once 'produtos.php';

//cria novo produto com o preço R$ 345.67
$produto = new Produto(1, 'Pendrive 512Mb', 1, 345.67);

//imprime o preço
//echo $produto->preco;

echo $produto->descricao;