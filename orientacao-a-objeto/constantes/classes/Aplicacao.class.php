<?php
class Aplicacao extends Biblioteca
{
    //Constantes são declarações imutáveis
    const Ambiente  = 'Gnome Desktop';
    const Versao    = '1.0';
    static $Quantidade;

    function __construct($Nome)
    {
        self::$Quantidade++;

        $i = self::$Quantidade;

        echo "Nova aplicação nr $i de $Nome\n";
        echo parent::Nome . self::Ambiente . self::Versao . $Nome . "\n";
    }

    static function Sobre()
    {
        $fd = fopen('readme.txt', 'r');
        while($linha = fgets($fd, 200)){
            echo $linha;
        }
    }
}
