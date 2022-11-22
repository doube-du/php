<?php
class Produto
{
    public  $Codigo;
    public  $Descricao;
    public  $Quantidade;
    private $Preco;
    const   LUCRO = 10;

    #Construtor
    function __construct($Codigo, $Descricao, $Quantidade, $Preco)
    {
        $this->Codigo       = $Codigo;
        $this->Descricao    = $Descricao;
        $this->Quantidade   = $Quantidade;
        $this->Preco        = $Preco;
    }

    function __get($propriedade)
    {
        echo "Buscando valor de {$propriedade}...\n";
        if($propriedade == 'Preco'){
            return $this->$propriedade * (1 + self::LUCRO / 100);
        }
    }
    
    function __call($name, $arguments)
    {
        echo "Executando call: {$name}...\n";
        foreach($arguments as $key => $argument){
            echo "\tParâmetro $key: $argument";
        }
    }
}