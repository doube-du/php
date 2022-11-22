<?php
class Contato
{
    public string $Nome;
    public string $Telefone;
    public string $Email;

    function setContato($Nome, $Telefone, $Email)
    {
        $this->Nome     = $Nome;
        $this->Telefone = $Telefone;
        $this->Email    = $Email;
    }

    function getContato()
    {
        return "\nNome:\t\t{$this->Nome}\nTelefone:\t{$this->Telefone}\nEmail:\t\t{$this->Email}";
    }
}