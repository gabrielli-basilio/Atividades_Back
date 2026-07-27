<?php
    if ($_POST) {
        $numero1 = (float) $_POST["numero1"];
        $numero2 = (float) $_POST["numero2"];
        $operacao = $_POST["operacao"];

        switch ($operacao) {
            case "somar":
                $resultado = $numero1 + $numero2;
                break;
            case "subtrair":
                $resultado = $numero1 - $numero2;
                break;
            case "multiplicar":
                $resultado = $numero1 * $numero2;
                break;
            case "dividir":
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    $resultado = "Erro: divisão por zero";
                }
                break;
        }

        echo "<h2>Resultado: $resultado</h2>";
    }
?>