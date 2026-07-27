<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculo IMC</title>
    </head>

    <body>
        <h1>Calculo IMC</h1>
        <form action="index.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required step="0.01">

            <br>

            <label for="peso">Peso:</label>
            <input type="number" id="peso" name="peso" required step="0.01">

            <br>

            <label for="altura">Altura:</label>
            <input type="number" id="altura" name="altura" required step="0.01">

            <br>

            <button type="submit">Enviar Informações</button>
        </form>

        <?php
            if ($_POST) {
                $nome = $_POST["nome"];
                $peso = $_POST["peso"];
                $altura = $_POST["altura"];

                $imc = $peso / ($altura * $altura);

                echo "<h2>Seu IMC é:</h2> $imc";
            }
        ?>
    </body>

</html>