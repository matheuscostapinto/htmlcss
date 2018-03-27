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
		// percorre os resultados via iteração
		?>
		
		<table border="1">
			<th>Codigo</th>
			<th>Nome</th>		
		<?PHP
		foreach($result as $row)
		{
			// exibe os resultados
			?>
			<tr>
				<td><?php echo $row['codigo'];?></td>
				<td><?php echo $row['nome'];?></td>
			</tr>
			<?php
			}
			?>
		</table>		
		<?php
	}
	
	// fecha a conexão
	$conn = null;
}
catch (PDOException $e)
{
	print "Erro!: " . $e->getMessage() . "<br/>";
	die();
}