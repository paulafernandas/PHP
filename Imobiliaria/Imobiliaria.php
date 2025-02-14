<?php

class Imobiliaria
{

    public $imoveis;

    public function cadastrarImovel($imovel)
    {
        $this->imoveis[] = $imovel;
    }

    public function listarImoveisDisponiveis()
    {

        echo "Imóveis disponíveis: \n";

        foreach ($this->imoveis as $imovel) {
            if ($imovel->getStatus() === "Disponível") {
                echo $imovel->getDetalhes() . \n;
            }

        }

    }
}
?>