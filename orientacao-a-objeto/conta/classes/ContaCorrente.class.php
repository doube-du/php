<?php 
// Classe final é a classe que não pode mais ser especializada, sendo que não terá herdeiros
final class ContaCorrente extends Conta
{
    var $Limite;

    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite){
        //Chama o construtor PAI/MÃE (A classe... deve ser mãe)
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Limite = $Limite;
    }

    function Retirar($quantia){
        $cpmf = 0.05; //Taxa (Custo por Movimentação Financeira)

        if($this->Saldo + $this->Limite >= $quantia){
            //Invoca metodo pai
            $imposto = $quantia * $cpmf;
            echo "Imposto no valor de: R$ {$imposto}";

            parent::Retirar($quantia + $imposto);
            
        }else{
            echo 'Retirada não permitida';
            return false;
        }

        return true;
    }
}
?>