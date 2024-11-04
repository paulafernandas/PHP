<?PHP

$conta = new Conta(100);
$operacoes = new Operacoes($conta);

$continua = true;

while ($continua){
$operacoes->mostrarMenu();
$opcao = (int) fgets(STDIN);  //Recebo a opção do usuário
$continua = $operacoes ->processarInformacoes($opcao); 
}
?>