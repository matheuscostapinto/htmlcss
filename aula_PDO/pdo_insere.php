<?php
try
{
	// instancia objeto PDO, conectando no postgresql
	$conn = new PDO('mysql:host=localhost;port=3306;dbname=flexxo_objetos;', 'root', '');
	
	
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
	
	

	// executa uma série de instruções SQL
	$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (1, 'Érico Veríssimo')");
	$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (2, 'John Lennon1')");
	$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (3, 'Mahatma Gandhi')");
	$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (4, 'Ayrton Senna')");
	$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (5, 'Charlie Chaplin')");
	$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (6, 'Anita Garibaldi')");
	$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (7, 'Mário Quintana')");
 
	// fecha a conexão
	$conn = null ;
}
catch (PDOException $e)
{
	// caso ocorra uma exceção, exibe na tela
	print "Erro!: " . $e->getMessage() . "\n";
	die();
}