<?php

class Produto
{

    //Atributos ou váriaveis
    public String $nome;
    public String $preco;

//Método construtor

public function __construct(String $nome, String $preco){

$this->nome = $nome;
$this->preco = $preco;
}

}

//Classe ELETRONICO que herda as informações de Produto
class Eletronico extends Produto{

private int $garantia;

public function __construct(String $nome, String $preco, int $garantia){
    parent::__construct($nome, $preco); //Inicializa as informações da classe base
    $this->garantia = $garantia; //Atributo específico da classe Eletronico
    }
}

class Alimento extends Produto{ 

private String $validade;

public function __construct(String $nome, String $preco, String $validade){
    parent::__construct($nome, $preco);
    $this->validade = $validade;
}
}

class Roupa extends Produto{ 

    private int $tamanho;
    
    public function __construct(String $nome, String $preco, int $tamanho){
        parent::__construct($nome, $preco);
        $this->tamanho = $tamanho;
    }
}

//Criando os objetos das classes ELETRONICO e ALIMENTO
$produtoEletronico = new Eletronico ("Smartphone", "R$ 1200,00", 12);
$produtoAlimento = new Alimento ("Maçã", "R$ 0,50", "30/12/2024");
$produtoRoupa = new Roupa("Calça", "R$ 100,00", 40);

?>
