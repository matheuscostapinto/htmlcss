<?php

class Produto
{
	//atributos
	var $codigo;
	var $descricao;
	var $preco;
	var $quantidade;
	
	//metodos
	// metodos nativos: __construct
	
	function imprimeEtiqueta()
	{
		print 'Código: ' . $this->codigo . "\n";
		print 'Descrição: ' . $this->descricao . "\n";
	}		
}

?>