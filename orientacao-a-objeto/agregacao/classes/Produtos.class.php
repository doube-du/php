<?php
class Produto {
    public int          $Codigo;
    public string       $Descricao;
    public float        $Preco;
    public int          $Quantidade;
    public Fornecedor   $Fornecedor;

    function __construct($Codigo, $Descricao, $Preco, $Quantidade, $Fornecedor)
    {
        $this->Codigo = $Codigo;
        $this->Descricao = $Descricao;
        $this->Preco = $Preco;
        $this->Quantidade = $Quantidade;
        $this->Fornecedor = $Fornecedor;
    }

    function ImprimeEtiqueta()
    {
        echo "Código:\t\t\t$this->Codigo\n";
        echo "Descrição:\t\t$this->Descricao\n";
        echo "Código Fornecedor:\t$this->Codigo\n";
        echo "Fornecedor:\t\t{$this->Fornecedor->RazaoSocial}\n";
        echo "\n";
    }
}
?>