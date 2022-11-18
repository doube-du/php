<?php
class Cesta
{
    private $itens;

    function AdicionaItem(Produto $item)
    {
        $this->itens[] = $item;
    }

    function imprimeLista()
    {
        foreach($this->itens as $item){
            $item->imprimeEtiqueta();
        }
    }

    function calculaTotal()
    {
        $total = 0;
        foreach($this->itens as $item){
            $total += $item->Preco;
        }
        echo "Total:\tR$ {$total}";
    }
}