





$produto1 = new Produto();

$produto1->codigo = '123';
$produto1->descricao = 'CANETINHAS';

$produto2 = new Produto();
$produto3 = new Produto();
$produto4 = new Produto();
$produto5 = new Produto();

$produto2->codigo = '456';
$produto2->descricao = 'SALMAO';

$produto4->codigo = '789';
$produto4->descricao = 'CARNE';

echo $produto1->codigo;
echo $produto2->codigo;
echo $produto3->codigo;

$produto1->imprimeEtiqueta();
$produto2->imprimeEtiqueta();
$produto3->imprimeEtiqueta();
$produto4->imprimeEtiqueta();

