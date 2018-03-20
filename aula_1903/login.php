<?php

	session_start();
	
	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];
	
	if ($usuario=='pedro' && $senha=='123')
	{
		$_SESSION['autenticado'] = true;
		header('location:painel.php');	
	}else{
		echo 'Falha';
	}