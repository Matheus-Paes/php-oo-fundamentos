<?php
  abstract class Conta { //classe conta é uma classe abstrata(ou classee eestrutural) pois ela nao pode ser instaciado como um objeto
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo) {
      $this->agencia = $agencia;
      $this->conta = $conta;
      $this->saldo = $saldo;
    }

    public function getDetalhes() {
      return "Agencia: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo}<br>";
    }

    public function depositar($valor) {
      $this->saldo =+ $valor;
      echo "Depósito de: {$valor} | Saldo atual: {$this->saldo} <br>";
    }
  }

  class Poupanca extends Conta {
    public function saque($valor) {
      if($this->saldo >= $valor) {
        $this->saldo -= $valor;
        echo "Depósito de: {$valor} | Saldo atual: {$this->saldo} <br>";
      }
      else {
        echo "Saque não autorizado de {$valor} | Saldo atual: {$this->saldo} <br>";
      }
    }
  }

  class Corrente extends Conta {
    protected $limite;

    public function __construct($limite) {
      parent::__construct($agencia, $conta, $saldo);
      $this->limite = $limite;
    }

    public function saque($valor) {
      if(($this->saldo + $this.limite) >= $valor) {
        $this->saldo -= $valor;
        echo "Depósito de: {$valor} | Saldo atual: {$this->saldo} <br>";
      }
      else {
        echo "Saque não autorizado de {$valor} | Saldo atual: {$this->saldo} | Limite: {$this->limite} <br>";
      }
    }
  }

  $c1 = new Poupanca(100, 2586, 5000);
  $c1->depositar(1500);
  $c1->saque(2500);
  $c1->saque(4500);
  
  $c2 = new Corrente(100, 2586, 5000);
  $c2->depositar(1500);
  $c2->saque(2500);
  $c2->saque(4500);



  echo $c1->getDetalhes();

?>