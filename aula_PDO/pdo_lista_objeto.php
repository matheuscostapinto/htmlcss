<?php

try
{
	// instancia objeto PDO, conectando no postgresql
	$conn = new PDO('mysql:host=localhost;port=3306;dbname=flexxo_objetos;', 'root', '');

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
	// executa uma instrução SQL de consulta
	$result = $conn->query("SELECT codigo, nome FROM famosos");
	
	if($result)
	{
		// percorre os resultados via fetch()
		while ($row = $result->fetch(PDO::FETCH_OBJ))
		{
			// exibe os dados na tela, acessando o objeto retornado
			echo $row->codigo . ' - ' . $row->nome . "<br>\n";
		}
	}
 
	// fecha a conexão
	$conn = null;
}
catch (PDOException $e)
{
	print "Erro!: " . $e->getMessage() . "<br/>";
	die();
}