<?php

class ContaBancaria

{
   private $nomeTitular = 'Larissa Bispo';
   private $numeroAgencia = '0068';
   private $numeroConta;
   private $saldo = 1000.00;
   private $banco;

   public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
   {
      $this->banco=$banco;
      $this->numeroAgencia=$numeroAgencia;
      $this->nomeTitular=$nomeTitular;
      $this->numeroConta=$numeroConta;
      $this->saldo=$saldo;

   }

   public function obterSaldo()
   {
      return 'Seu Saldo atual é: R$' .$this->saldo;

   }

   public function depositar($valor)
   {
      $this->saldo +=$valor;
      return 'Deposito de R$' .$valor. ' realizado.';
   }

   public function sacar($valor)
   {

      $this->saldo -=$valor;
      return 'Saque de R$' .$valor. ' realizado.';
   }




}

$conta = new ContaBancaria(
   'Banco do Brasil', //banco
   'Larissa Bispo', //nomeTitular
   '0068', //numeroAgencia
   '36396-1', //numeroConta
   '3000.00' //Saldo
);

echo $conta->obterSaldo(); //

echo PHP_EOL;

echo $conta->depositar(300.00);

echo PHP_EOL;

echo $conta->obterSaldo(); 

echo PHP_EOL;

echo $conta->sacar(150.00);

echo PHP_EOL;

echo $conta->obterSaldo();





