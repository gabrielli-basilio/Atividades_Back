<?php

    // IF e ELSE:

        // 1. Crie uma variável $idade.

        $idade = 12;

        if ($idade >= 18) {
            echo "Você é maior de idade. \n";
        } else {
            echo "Você é menor de idade. \n";
        }
        
        echo "\n";

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

        echo "\n", "\n";

        // 3. Operação

        $numero1 = 15; 
        $numero2 = 40;
        $operacao = "+"; // Pode ser: +, -, *, /

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

        echo "\n", "\n";

    //LOOPS:

        // 4. Mostre somente os números pares de 1 até 100

        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 == 0) {
                echo $i ."\n";
            }
        }

        /* 5. Exiba a tabuada dos números:
        4, 7 e 12.879,5 */

        $numero1 = 4;
        $numero2 = 7;
        $numero3 = 12879.5;

        foreach ([$numero1, $numero2, $numero3] as $numero) {
            echo "---Tabuada do $numero---\n";
            for ($i = 1; $i <= 10; $i++) {
                echo "$numero x $i = " . ($numero * $i) . "\n";
            }
            echo "\n";
        }
?>