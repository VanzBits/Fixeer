<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fixeer</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>

    <div class="form-container">
        <form action="index.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Entrar</button>
            <button type="button" onclick="window.location.href='cadastro.php'">Cadastrar</button>
            <button type="button">Esqueci a senha</button>
        </form>
    </div>
</body>
</html>
