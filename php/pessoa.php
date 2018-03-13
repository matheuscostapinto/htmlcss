<?php class Pessoa { 
 
var $codigo;
var $nome;
var $altura;
var $idade;
var $nascimento;
var $escolaridade;
var $salario; 
 
/***  * método crescer * aumenta a altura em centímetros  */ 
function crescer($centimetros)
{
	if ($centimetros > 0)
	{
		$this->altura += $centimetros; // $this->altura = $this->altura + $centimetros;
	}
}
 
/***  * método estudar * altera a escolaridade para $titulacao */
function formar($titulacao)
{
	$this->escolaridade = $titulacao;
}
 
/*** * método envelhecer * aumenta a idade em $anos */
function envelhecer($anos)
{
	if ($anos > 0)
	{
		$this->idade += $anos;
	}
} 
 
}