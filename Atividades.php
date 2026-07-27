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

    // 3. Operação

    $numero1 = 15; 
    $numero2 = 40;
    $operacao = "*"; // Pode ser: +, -, *, /

    switch ($operacao) {
        case "+":
            echo $numero1 + $numero2;
            break;

        case "-":
            echo $numero1 - $numero2;
            break;

        case "*":
            echo $numero1 * $numero2;
            break;

        case "/":

            if ($numero2 != 0) {
                echo $numero1 / $numero2;
            } else {
                echo "Divisão por zero não é permitida.";
            }
            break;
            
        default:
            echo "Operação inválida.";
    }
?>