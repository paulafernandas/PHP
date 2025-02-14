<?php

class Imovel
{

    public $endereco;
    public $preco;
    public $status;
    public $proprioetario;
    public $corretor;

    public function __construct($endereco, $preco)
    {
        $this->endereco = $endereco;
        $this->preco = $preco;
        $this->status = "Disponível";
    }

    public function associarCoretor($corretor)
    {
        $this->corretor = $corretor;
    }

    public function vender()
    {
        $this->status = "Vendido";
    }

    public function getDetalhes()
    {

        $detalhes = "Endereço $this->endereco, Preço: $this->preco, Status: $this->status";

        if ($this->proprietario) {
            $detalhes .= ", Proprietário: " . $this->proprietario->getDetalhes();
        }

        if ($this->corretor) {
            $detalhes .= ", Corretor: " . $this->corretor->getDetalhes();
        }

        return $detalhes;

    }

    public function getStatus()
    {
        return $this->status;
    }
}

?>