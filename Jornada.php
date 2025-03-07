<?php

class Jornada {
    public $energia = 10;

    public function iniciar() {
        while ($this->energia > 0) {
            echo "\nVocê está na floresta. Sua energia atual é {$this->energia} \n";
            echo "Você vê um caminho dividido em dois. Escolha: \n";
            echo "1- Caminho iluminado. \n";
            echo "2- Caminho escuro e assustador. \n";

            $escolha = readline("Escolha 1 ou 2: ");

            if ($escolha == 1) {
                echo "Você encontrou um rio refrescante e recuperou energia! \n";
                $this->energia += 2;
            } elseif ($escolha == 2) {
                echo "Oh não! Você foi atacado por lobos e perdeu energia! \n";
                $this->energia -= 5;
            } else {
                echo "Escolha inválida. Você perdeu tempo e energia! \n";
                $this->energia -= 1;
            }

            if ($this->energia <= 0) {
                echo "Você desmaiou de cansaço... Fim de jogo! \n";
                break;
            }

            echo "Deseja continuar a aventura? (s/n) \n";
            $continuar = readline("Digite 'S' para continuar ou 'N' para sair: ");

            if (strtolower($continuar) == 'n') {
                echo "Você decidiu sair da floresta e voltar para casa. Fim da aventura! \n";
                break;
            }
        }

        echo "Obrigada por jogar! \n";
    }
}

// Criar uma instância da classe e iniciar o jogo
$jogo = new Jornada();
$jogo->iniciar();

?>
