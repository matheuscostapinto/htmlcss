<?php //insere a classe
//include_once 'produtos.php'; //gera WARNING se nao localizar o arquivo // carrega uma unica vez e deixa armazenado na memoria
//include 'produtos.php'; // toda a vez q for chamado vai carregar
//require_once 'produtos.php'; gera ERROR se nao achar o arquivo
//require 'produtos.php';
 
include_once 'produtos.php'; 
 
// cria dois objetos
$produto1 = new Produto;
$produto2 = new Produto; 
 
// atribuir valores
$produto1->codigo = 4001;
$produto1->descricao = 'CD - The Best of Eric Clapton'; 
$produto2->codigo = 4002;
$produto2->descricao = 'CD - The Eagles Hotel California'; 
 
// imprime informações de etiqueta
$produto1->imprimeEtiqueta();
$produto2->imprimeEtiqueta();