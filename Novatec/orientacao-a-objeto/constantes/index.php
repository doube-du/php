<?php

include 'classes/Biblioteca.class.php';
include 'classes/Aplicacao.class.php';

echo Biblioteca::Nome . Aplicacao::Ambiente . Aplicacao::Versao . "\n";

new Aplicacao('Dia');
new Aplicacao('GIMP');

echo "\n\nInformações da Aplicação";
echo "\n\n========================\n\n";
Aplicacao::Sobre();