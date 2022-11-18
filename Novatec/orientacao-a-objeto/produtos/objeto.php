<?php
// Puxa a Classe
include_once 'classes/Produtos.class.php';

// Cria Produto
$produto1 = new Produto();
$produto2 = new Produto();

//Atribui valores
$produto1->Codigo       = 1001;
$produto1->Descricao    = 'CD Acústico Legião Urbana';

$produto2->Codigo       = 1002;
$produto2->Descricao    = 'CD Metallica (The Black Album)';

$produto1->ImprimeEtiqueta();
$produto2->ImprimeEtiqueta();


?>