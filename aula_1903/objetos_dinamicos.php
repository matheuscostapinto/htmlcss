<?php 
 
//cria objeto william
$william = new stdClass;
$william->nome = 'William Santos';
$william->idade = 20;
$william->profissao = 'Programador';

//cria objeto rafaela
$rafaela = new stdClass;
$rafaela->nome = 'Rafaela Santos';
$rafaela->idade = 24;
$rafaela->profissao = 'Policial Militar';

print_r($william);
print_r($rafaela);