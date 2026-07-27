<?php

// IF e ELSE:

    // 1. Crie uma variável $idade.

    $idade = 12;

    if ($idade >= 18) {
        echo "Você é maior de idade. \n";
    } else {
        echo "Você é menor de idade. \n";
    }
    

    // 2. Crie uma variável $dinheiro.

    $dinheiro = 2000;

    if ($dinheiro <= 1000) {
        echo "Pobre";
    } else if ($dinheiro <= 5000) {
        echo "Classe Média";
    } else if ($dinheiro <= 50000) {
        echo "Riquinho";
    } else if ($dinheiro <= 1000000) {
        echo "Ricão";
    } else {
        echo "Elon Musk";
    }
?>