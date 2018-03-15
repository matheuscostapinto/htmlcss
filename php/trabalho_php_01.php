<?php

include_once('pagina.php');

/*$nova_tela = new Pagina();

$nova_tela->title = 'Nova Tela';
$nova_tela->meta = 'charset="UTF-8"';
$nova_tela->arq_css = 'css/form.css';
$nova_tela->cont_body = '<div><label for="nome">Nome:</label><input type="text" name="nome" id="nome"/></div>';
*/
//$nova_tela->exibirTela();

$nova_tela2 = new Pagina('TESTE CONSTRUCT','charset="UTF-8"','css/form.css');
$nova_tela2->cont_body = '<div><label for="nome">Nome:</label><input type="text" name="nome" id="nome" value="MATHEUS TESTANDO"/></div>';
$nova_tela2->exibirTela();