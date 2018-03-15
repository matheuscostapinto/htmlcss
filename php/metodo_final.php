<?php
# carrega as classes
include_once 'conta_bancaria.php';
include_once 'conta_corrente.php';

class ContaCorrenteEspecial extends ContaCorrente
{
	
	function depositar($valor)
	{
		echo "sobrescrevendo método depositar.\n";
		parent::depositar($valor);
	}
	
	/*function transferir($conta, $valor)
	{
		echo "sobrescrevendo método transferir.\n";
		parent::transferir($conta, $valor);
	}*/
} 