<?php

$idade = 17;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver 18 anos ou mais.";
echo "a apartir de 16 anos acompnhado" . PHP_EOL;

if($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} elseif($idade >= 16 && $numeroDePessoas > 1) {
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
    } else {
        echo "Você só tem $idade anos. Você não pode entrar";
    }    

echo PHP_EOL;
echo "Adeus!";