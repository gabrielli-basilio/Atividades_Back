<?php 
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $nascimento = $_POST["nascimento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $sexo = $_POST["sexo"];
    $curso = $_POST["curso"];
    $observacoes = $_POST["observacoes"];

    echo "<h2>Cartão de Cadastro</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";
    echo "<p><strong>Data de Nascimento:</strong> $nascimento</p>";
    echo "<p><strong>Cidade:</strong> $cidade</p>";
    echo "<p><strong>Estado:</strong> $estado</p>";
    echo "<p><strong>Sexo:</strong> $sexo</p>";
    echo "<p><strong>Curso:</strong> $curso</p>";
    echo "<p><strong>Observações:</strong> $observacoes</p>";

?>
