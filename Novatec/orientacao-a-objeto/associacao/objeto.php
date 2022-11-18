<?php
// Puxa a Classe
include_once 'classes/Produtos.class.php';
include_once 'classes/Cesta.class.php';
include_once 'classes/Fornecedor.class.php';

$fornecedor1 = new Fornecedor(1, 'Kinder', 'Rua Reinoso Fernandes, 390', 'São Paulo');
$fornecedor2 = new Fornecedor(1, 'Coca Cola', 'Rua Reinoso Fernandes, 390', 'São Paulo');
$fornecedor3 = new Fornecedor(1, 'Schincariol', 'Rua Reinoso Fernandes, 390', 'São Paulo');

//Instancia Produto
$produto1 = new Produto(1, 'Kinder Maxi Ovo', 70, 100, $fornecedor1);
$produto2 = new Produto(2, 'Coca Cola', 8, 100, $fornecedor2);
$produto3 = new Produto(3, 'Fanta Uva', 6, 100, $fornecedor2);
$produto4 = new Produto(4, 'Fanta Laranja', 6, 100, $fornecedor2);
$produto5 = new Produto(5, 'Itubaina', 5, 100, $fornecedor3);

$cesta = new Cesta;
$cesta->AdicionaItem($produto1);
$cesta->AdicionaItem($produto2);
$cesta->AdicionaItem($produto3);
$cesta->AdicionaItem($produto4);
$cesta->AdicionaItem($produto5);

$cesta->calculaTotal();
echo "\n";
$cesta->imprimeLista();

?>