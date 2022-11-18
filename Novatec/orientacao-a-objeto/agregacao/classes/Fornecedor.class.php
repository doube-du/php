<?php
class Fornecedor
{
    public int      $Codigo;
    public string   $RazaoSocial;
    public string   $Endereco;
    public string   $Cidade;

    function __construct($codigo, $razao, $endereco, $cidade)
    {
        $this->Codigo       = $codigo;
        $this->RazaoSocial  = $razao;
        $this->Endereco     = $endereco;
        $this->Cidade       = $cidade;
    }
}