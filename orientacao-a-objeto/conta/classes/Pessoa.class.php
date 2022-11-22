<?php
class Pessoa{
    var $Codigo;
    var $Nome;
    var $Altura;
    var $Idade;
    var $Nascimento;
    var $Escolaridade;
    var $Salario;

    function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario)
    {
        $this->Codigo =        $Codigo;
        $this->Nome =          $Nome;
        $this->Altura =        $Altura;
        $this->Idade =         $Idade;
        $this->Nascimento =    $Nascimento;
        $this->Escolaridade =  $Escolaridade;
        $this->Salario =       $Salario;
    }

    function __destruct()
    {
        echo "Objeto ID: $this->Codigo finalizado... \n\n";
    }

    function Crescer($centimetros)
    {
        $this->altura += $centimetros;
    }

    function Formar($titulo)
    {
        $this->Escolaridade = $titulo;
    }

    function Envelhecer($anos)
    {
        $this->Idade += $anos;
    }
}