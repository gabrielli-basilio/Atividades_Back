<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>

    <form action="cadastrar.php" method="POST">
        <form action="" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <br>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>

        <br>

        <label for="nascimento">Data de Nascimento:</label>
        <input type="date" id="nascimento" name="nascimento" required>

        <br>

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required>

        <br>

        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" required>

        <br>

        <label for="sexo">Sexo:</label>
        <input type="text" id="sexo" name="sexo" required>

        <br>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required>

        <br>

        <label for="observacoes">Observações:</label>
        <br>
        <textarea id="observacoes" name="observacoes"></textarea>

        <br>

        <button type="submit">Enviar Informações</button>
    </form>
</body>
</html>