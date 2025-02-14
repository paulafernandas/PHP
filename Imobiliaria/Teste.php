<?php

//Testando o sistema

//Criando os proprietários
$proprietario1 = new Proprietario("Maria Silva", "maria@gmail.com");
$proprietario2 = new Proprietario("Carlos Santos", "51 99999-9999");

//Criando os corretores
$corretor1 = new Corretor("Ana Correia","ana@corretora.com");
$corretor2 = new Corretor("João Almeida","joao@corretora.com");

//Criando os imóveis
$imovel1 = new Imovel ("Rua A, Nº 123",250000);
$imovel2 = new Imovel ("Avenida B, Nº 456",350000);

//Associando proprietários aos imóveis
$imovel1->associarProprietario($proprietario1);
$imovel2->associarProprietario($proprietario2);

//Associando corretores aos imóveis
$imovel1->associarCorretor($corretor1);
$imovel2->associarCorretor($corretor2);

//Criando uma imobiliaria e cadastrando imoveis
$imobiliaria = new Imobiliaria();
$imobiliaria->cadastrarImovel($imovel1);
$imobiliaria-> cadastrarImovel($imovel2);

//Listando os imóveis disponíveis
$imobiliaria->listarImoveisDisponiveis();

//Vendendo um imóvel
echo "\n Alternando o status de um imóvel para 'vendido'... \n";
$imovel1 -> vender();

//Listando novamente os imóveis disponíves 
$imobiliaria-> listarImoveisDisponiveis();
?>