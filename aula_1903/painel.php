<?php

	session_start();

	if (!$_SESSION['autenticado'])
	{
		header('location:form.html');
	}else{
		echo 'SEJA BEM VINDO';
		
		echo '<a href="logout.php"> SAIR </a>';
		
	}