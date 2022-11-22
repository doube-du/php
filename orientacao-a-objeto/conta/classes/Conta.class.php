<?php
//Abstrair a classe faz com que ela nunca possa ser instanciada, servindo apenas como base de outras classes.
abstract class Conta{
    var $Agencia;
    var $Codigo;
    var $DataDeCriacao;
    var $Titular;
    var $Senha;
    var $Saldo = 0;
    var $Cancelada;
    
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo)
    {
        $this->Agencia          = $Agencia;
        $this->Codigo           = $Codigo;
        $this->DataDeCriacao    = $DataDeCriacao;
        $this->Titular          = $Titular;
        $this->Senha            = $Senha;

        $this->Depositar($Saldo);
        $this->Cancelada        = false;
    }

    function __destruct()
    {
        echo "Objeto Conta $this->Codigo de {$this->Titular->Nome} finalizado...\n\n";
    }

    function Retirar($valor)
    {
        echo "\n\nSacando...\n";
        if($valor > 0){
            
            $this->Saldo -= $valor;
            $this->Saldo = number_format($this->Saldo, 2, '.', '');
            echo "Sacado: \t\tR$ ${valor}\nNovo Saldo:\t\tR$ {$this->Saldo}\n";
        }else{
            echo "Saldo Indisponível\n";
        }
    }

    function Depositar($valor)
    {
        echo "\n\nDepositando...\n";
        echo "Novo Anterior: \t\tR$ {$this->Saldo}\n";
        $this->Saldo += $valor;
        $this->Saldo = number_format($this->Saldo, 2, '.', '');
        echo "Novo Saldo: \t\tR$ {$this->Saldo}\n\n";
    }

    function ObterSaldo()
    {
        echo "Seu saldo é: \t\tR$ {$this->Saldo}\n";
    }
}