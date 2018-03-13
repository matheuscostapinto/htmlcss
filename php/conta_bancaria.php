<?php class ContaBancaria
{
	var $agencia;
	var $codigo;
	var $dataDeCriacao;
	var $titular;
	var $senha;
	var $saldo;
 
/*** * método retirar * diminui o saldo em $quantia */
function retirar($quantia)
{
	if ($quantia > 0)
	{
		$this->saldo -= $quantia;
	}
} 
 
/*** * método depositar * aumenta o saldo em $quantia */
function depositar($quantia)
{
	if ($quantia > 0)
	{
		$this->saldo += $quantia;
	}
} 
 
/*** * método obterSaldo * retorna o saldo atual */
function obterSaldo()
{
	return $this->saldo;
}

}