<?php

//inclui a interface IAluno
include_once 'ialuno.php';

//Classe Aluno
class Aluno implements IAluno
{
	//atribui o nome do aluno
	function SetNome($nome)
	{
		$this->nome = $nome;
	}
	
	//retorna o nome do aluno
	function GetNome()
	{
		return $this->nome;
	}
	
	
	
	function SetResponsavel(Pessoa $responsavel)
	{
		
	}
	
	
}

//instancia novo Aluno
$aluno = new Aluno;

//chama métodos quaisquer
$aluno->setNome('Joana');
echo $aluno->getNome();