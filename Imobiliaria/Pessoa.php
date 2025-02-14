<?php

class Pessoa
{
    public $nome;
    public $contato;

    public function __construct($nome, $contato)
    {

        $this->nome = $nome;
        $this->contato = $contato;
    }

    public function getDetalhe()
    {
        return "Nome: $this->nome, Contato: $this->contato";
    }
}
?>