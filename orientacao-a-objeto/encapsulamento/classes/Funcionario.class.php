<?php

class Funcionario{
    private     $Codigo;    //Acessível apenas por esta classe
    protected   $Salario;   //Acessível por esta classe e as filhas
    public      $Nome;      //Acessível sempre
    private     $Nascimento;

    /* Metodo SetSalario
     * Atribui valor à Salario
     */

    function __construct($codigo, $salario, $nome, $nascimento)
    {
        $this->Nome     = $nome;
        $this->SetCodigo($codigo);
        $this->SetSalario($salario);
        $this->SetNascimento($nascimento);
    }

    function SetSalario($Salario)
    {
        //Verifica se é numerico e positivo
        if(is_numeric($Salario) && ($Salario > 0)){
            $this->Salario = $Salario;
        }
    }

    function SetCodigo($Codigo){
        $this->Codigo = $Codigo;
    }

    function SetNascimento($Nascimento){
        $this->Nascimento = $Nascimento;
    }

    function GetSalario()
    {
        return $this->Salario;
    }

    function GetCodigo($Codigo){
        return $this->Codigo = $Codigo;
    }
    
    function GetNascimento($Nascimento){
        return $this->Nascimento = $Nascimento;
    }
}