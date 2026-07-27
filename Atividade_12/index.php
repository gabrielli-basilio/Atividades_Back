<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
 
    <form action="calculadora.php" method="POST">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" step="0.01" required>
 
        <br>
 
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" step="0.01" required>
 
        <br>
 
        <button type="submit" name="operacao" value="somar">Somar</button>
        <button type="submit" name="operacao" value="subtrair">Subtrair</button>
        <button type="submit" name="operacao" value="multiplicar">Multiplicar</button>
        <button type="submit" name="operacao" value="dividir">Dividir</button>
    </form>
</body>
</html>