<?php
#Importando Classes
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/ContaCorrente.class.php';
include_once 'classes/ContaPoupanca.class.php';

#Criando Objeto
$pessoa     = new Pessoa(1,'Eduardo',1.83, 27, '30/09/1995', 'Superior Incompleto', 4700.20);
$pessoa2    = new Pessoa(1,'Vitor',1.83, 27, '22/09/1995', 'Superior Incompleto', 1500.20);
echo "Manipulando objeto: {$pessoa->Nome}\n";

#Criando Contas
$contas[1] = new ContaCorrente(123,1,'16/11/2022',$pessoa, '1324', 100, 100);
$contas[2] = new ContaPoupanca(123,1,'16/11/2022',$pessoa2, '1324', 0.25, $pessoa2->Nascimento);

//Percorrendo contas...
foreach($contas as $key => $conta){
    echo "Manipulando conta $key de {$conta->Titular->Nome}\n";
    $conta->ObterSaldo();
    $conta->Depositar(25.50);
    $conta->ObterSaldo();
    $conta->Retirar(25.25);
}