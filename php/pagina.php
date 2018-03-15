<?php

class Pagina
{

	// atributos
	var $title;
	var $meta;
	var $arq_css;
	var $cont_body;

	// metodos
	function exibirTela()
	{
		echo "<html>
				<head>
					<title>{$this->title}</title>
					<meta {$this->meta} />
					<link href='{$this->arq_css}' rel='stylesheet'/>
				</head>	
				<body>{$this->cont_body}
				</body>
			</html>\n";
	}
	
	
	function __construct($title,$meta,$arq_css)
	{
		$this->title = $title;
		$this->meta = $meta;
		$this->arq_css = $arq_css;
	}	

}
