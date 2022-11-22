<?php
class Fornecedor
{
    public int      $Codigo;
    public string   $RazaoSocial;
    public string   $Endereco;
    public string   $Cidade;
    public $Contato;

    function __construct($codigo, $razao, $endereco, $cidade)
    {
        $this->Codigo       = $codigo;
        $this->RazaoSocial  = $razao;
        $this->Endereco     = $endereco;
        $this->Cidade       = $cidade;
        
        $this->Contato = new Contato;
    }

    function imprimeFornecedor()
    {
        return "\nCodigo:\t\t{$this->Codigo}\nRazao Social:\t{$this->RazaoSocial}\nEndereco:\t{$this->Endereco}\nCidade:\t\t{$this->Cidade}\n";
    }

    function SetContato($Nome, $Telefone, $Email)
    {
        $this->Contato->SetContato($Nome, $Telefone, $Email);
    }

    function GetContato()
    {
        return $this->Contato->getContato();
    }
}