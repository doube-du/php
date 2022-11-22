<?php
// Puxa a Classe
include_once 'classes/Produtos.class.php';
include_once 'classes/Fornecedor.class.php';

//Instanciar Forncedor
$fornecedor = new Fornecedor(1, 'Kinder', 'Rua Reinoso Fernandes, 390', 'São Paulo');

//Instancia Produto
$produto = new Produto(1, 'Kinder Maxi Ovo', 10, 100, $fornecedor);

$produto->ImprimeEtiqueta();
?>