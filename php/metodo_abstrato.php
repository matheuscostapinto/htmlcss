<?php
include_once 'pessoa.php';
include_once 'conta_bancaria.php';
include_once 'conta_poupanca.php';

$carlos = new Pessoa(10, "Carlos da Silva", 1.85, 25, 72,"Ensino Médio", 650.00);
$conta = new ContaPoupanca(6677, "CC.1234.56", "10/07/02", $carlos, 9876, 500.00, '10/07');