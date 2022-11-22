<?php
#Carregar Classes
include_once 'classes/Funcionario.class.php';
include_once 'classes/Estagiario.class.php';

#Cria Objeto
$func = new Funcionario(1, 4727, 'Eduardo','30/09/1995');
$est = new Estagiario(1, 1500, 'Vitor','22/09/1995');

$func->SetSalario(1000);
$est->SetSalario(1000);

print_r($func);
print_r($est);

echo "O salario do {$func->Nome} é:\tR$ {$func->GetSalario()}\n";
echo "O salario do {$est->Nome} é: \tR$ {$est->GetSalario()}\n";
/* FIM */