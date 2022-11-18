<?php
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

$pessoa = new Pessoa(0001, 'Eduardo', 1.83, 26, '30/09/1995', 'Superior Incompleto', 4700.20);

echo "Criado pessoa: $pessoa->Nome\n";

$pessoa->Formar('Analista de Sistemas');

echo "$pessoa->Nome é formada em $pessoa->Escolaridade\n";

echo "$pessoa->Nome tem $pessoa->Idade\n";

$pessoa->Envelhecer(1);

echo "$pessoa->Nome tem $pessoa->Idade\n";

// Criando Conta para Pessoa

$conta_pessoa = new Conta("Bradesco","5012","16/11/2022",$pessoa,"1234",100);

echo "Manipulando conta de {$conta_pessoa->Titular->Nome}\n";
$conta_pessoa->ObterSaldo();
$conta_pessoa->Depositar(20);
$conta_pessoa->Retirar(30);
