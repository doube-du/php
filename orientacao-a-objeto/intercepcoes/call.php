<?php
/*
A função call, assume o lugar de toda função que não existir como (Default)
*/
include 'classes/Produto.class.php';

$produto = new Produto(1, 'PenDrive Seagate', 1, 50);

$produto->Vender(10);
