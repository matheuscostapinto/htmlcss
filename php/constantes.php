<?php class Biblioteca
{
	const NOME = "Sistema ";
}

class Aplicacao extends Biblioteca
{
	// declaração das constantes
	const AMBIENTE = "Maestro ";
	const VERSAO = "1.0.0.1";
	
	/* método construtor   * acessa as constantes internamente */
	function __construct($nome)
	{
		echo parent::NOME . self::AMBIENTE . self::VERSAO . $nome . "\n"; 
	}
}
 
// acessa as constantes externamente
echo Biblioteca::NOME . Aplicacao::AMBIENTE . Aplicacao::VERSAO . "\n"; 
 
new Aplicacao(' 2016');
new Aplicacao(' 2017');