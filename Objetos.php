<?php

class Carro
{
    // Atributos ou Características de um carro
    public string $modelo;
    public string $marca;
    public string $chassi;
    public string $fabricante;

    // Métodos ou ações de um carro
    public function ligar()
    {
        echo "Carro ligado!";
    }

    public function desligar()
    {
        echo "Carro desligado!";
    }

    public function acelerar()
    {
        echo "Carro acelerando...";
    }

    public function frear()
    {
        echo "Carro freando...";
    }
}

//Criação dos objetos Carro

$corsa = new Carro();
$corsa->modelo = "Corsa";
$corsa->marca = "Chevrolet";
$corsa->chassi = "ABC123";
$corsa->fabricante = "Chevrolet";
$corsa->ligar();
$corsa->acelerar();
$corsa->frear();
$corsa->desligar();
echo "Nome do carro: " . $corsa->modelo;

$corsa = new Carro();
$corsa->modelo = "Gol";
$corsa->marca = "Volkswagen";
$corsa->chassi = "DEF456";
$corsa->fabricante = "Volkswagen";
$corsa->ligar();
$corsa->acelerar();
$corsa->frear();
$corsa->desligar();
echo "Nome do carro: " . $corsa->modelo;
