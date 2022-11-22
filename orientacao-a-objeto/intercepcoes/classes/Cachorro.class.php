<?php
class Cachorro
{
    private $Nascimento;

    #Construtor
    function __construct($Nome)
    {
        $this->Nome = $Nome;
    }

    #Intercepta Atribuições
    function __set($name, $value)
    {
        #Verifica se a propriedade é Nascimento
        if($name == 'Nascimento'){
            #Verifica se o valor é dividido em 3 partes
            if(count(explode('/', $value)) == 3 ){
                echo "Dado {$value}, à propriedade: {$name}\n";
                $this->$name = $value;
            }else{
                echo "Dado {$value} não pode ser atribuido à propriedade: {$name}\n";
            }
        }else{
            $this->$name = $value;
        }
    }

    function __toString()
    {
        return $this->Nome;
    }
}