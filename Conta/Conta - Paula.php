<?php 

class Conta{
public $agencia;
public $saldo;

public function __construct($saldoInicial =0){
    $this->saldo = $saldoInicial;
}

public function depositar($valor){
    $this->saldo+=$valor;
    echo "Depósito de R$ $valor realizado com sucesso! \n";
}

public function sacar($valor){
    if ($valor > $this->saldo){
        echo "Saldo é insuficiente para saque! \n";
    } else {
        echo "Saque de R$ $valor, reaçlizado com sucesso! \n";
    }
}

public function consultarSaldo(){
    echo "Saldo atual é de R$ " . $this->saldo."\n";
}

}
?>