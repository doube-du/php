<?php
class Produto {
    var $Codigo;
    var $Descricao;
    var $Preco;
    var $Quantidade;

    function ImprimeEtiqueta()
    {
        echo "Código:\t\t$this->Codigo\n";
        echo "Descrição:\t$this->Descricao\n";
        echo "\n";
    }
}
?>