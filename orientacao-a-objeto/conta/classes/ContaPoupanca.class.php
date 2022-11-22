<?php 
// Classe final é a classe que não pode mais ser especializada, sendo que não terá herdeiros
final class ContaPoupanca extends Conta
{
    var $Aniversario;

    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario){
        //Chama o construtor PAI/MÃE (A classe... deve ser mãe)
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Aniversario = $Aniversario;
    }

    function Retirar($quantia){
        if($this->Saldo >= $quantia){
            //Invoca metodo pai
            parent::Retirar($quantia);
        }else{
            echo 'Retirada não permitida';
            return false;
        }

        return true;
    }
}
?>