<?php
#Importa Classe
include 'classes/Produto.class.php';

#Cria objeto

$produto = new Produto(1,'Kinde Ovo', 25, 10);

#Busca preço
echo "Valor:\tR$ {$produto->Preco}";