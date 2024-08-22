<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, cpf, telefone, senha) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssss", $nome, $email, $cpf, $telefone, $senha);
        
        if ($stmt->execute()) {
            $_SESSION['mensagem_sucesso'] = "Cadastro realizado com sucesso!";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['mensagem_erro'] = "Erro ao cadastrar: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        $_SESSION['mensagem_erro'] = "Erro na preparação da consulta: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Fixeer</title>
    <link rel="stylesheet" href="./css/cadastrar.css">
</head>
<body>
    <header>
        <h1>Cadastro de Usuário</h1>
    </header>

    <div class="form-container">
        <form action="cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Cadastrar</button>
        </form>

        <?php if (isset($_SESSION['mensagem_erro'])): ?>
            <div class="mensagem-erro"><?php echo $_SESSION['mensagem_erro']; unset($_SESSION['mensagem_erro']); ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
