<?php
# carrega as classes
include 'funcionario.php';
include 'estagiario.php';
 
// cria objeto Funcionario
$pedrinho = new Funcionario;
$pedrinho->nome = 'Pedrinho';
 
// cria objeto Estagiario
$mariana = new Estagiario;
$mariana->nome = 'Mariana';
 
// imprime propriedade nome
echo $pedrinho->nome;
echo $mariana->nome;