<?php

$contasCorrentes = [
  12345678910 => [
    'titular' => 'Vinicius',
    'saldo' => 10000
  ], 
  12365498711 => [
    'titular' => 'Maria',
    'saldo' => 10000
  ], 
  43218765091 => [
    'titular' => 'Alberto',
    'saldo' => 300
  ]
];

$contasCorrentes [84886323553] = [
   'titular'=> 'Abade',
  'saldo' => 50000
];

foreach ($contasCorrentes as $cpf => $conta) {
  echo $conta['titular'] . PHP_EOL;
}