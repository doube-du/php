<?php
// Puxa a Classe
include_once 'classes/Produtos.class.php';
include_once 'classes/Cesta.class.php';
include_once 'classes/Fornecedor.class.php';
include_once 'classes/Contato.class.php';

$fornecedor = new Fornecedor(1,'Edu Forncecimentos', 'Rua Reinoso Fernandes, 390', 'São Paulo');

$fornecedor->SetContato('Eduardo','+55 11 9 8765-4321', 'eduardo.af@gmail.com');

echo $fornecedor->imprimeFornecedor();

echo "\n-- Informações do Contato:";

echo $fornecedor->GetContato(); // Return de string precisa de Echo

?>