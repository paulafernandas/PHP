<?php

class Operacoes
{

    public $conta;

    public function __construct($conta)
    {
        $this->conta = $conta;
    }

    public function mostrarMenu()
    {

        echo "\n--- Caixa Eletrônico ---\n";
        echo "1. Depositar\n";
        echo "2. Sacar\n";
        echo "3. Consultar saldo\n";
        echo "4. Sair\n";
        echo "Escolha uma opção.";

    }

    public function processarInformacoes($opcao)
    {
        switch ($opcao) {
            case "1":
                echo "Digite o valor do déposito: ";
                $valor = (float) fgets(STDIN);
                $this->conta->depositar($valor);
                break;

            case "2":
                echo "Digite o valor para saque: ";
                $valor = (float) fgets(STDIN);
                $this->conta->sacar($valor);
                break;

            case "3":
                $this->conta->consultarSaldo();
                break;

            case "4":
                echo "Saindo...";
                return false;

            default:
                echo "Opção inválida. Tente novamente. \n";
                break;

        }
        return true;
    }
}
?>