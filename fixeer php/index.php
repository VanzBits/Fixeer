<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixeer</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Bem-vindo ao Fixeer</h1>
            <div class="login-form">
                <form action="login.php" method="post">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <a href="index.php" class="btn-index">Entrar</a>
                    <a href="cadastro.php" class="btn-cadastrar">Cadastrar</a>
                </form>
            </div>
        </div>
    </header>

    <div class="search-container">
        <input type="text" id="search" placeholder="Pesquisar profissões...">
        <button type="button">Buscar</button>
    </div>

    <section class="job-types">
        <h2>Opções de Profissões</h2>
        <div class="job-list">
            <div class="job-item">
                <img src="imagens/desenvolvedor.png" alt="Desenvolvedor Web" class="job-image">
                <div class="job-title">Desenvolvedor Web</div>
            </div>
            <div class="job-item">
                <img src="imagens/designer.png" alt="Designer Gráfico" class="job-image">
                <div class="job-title">Designer Gráfico</div>
            </div>
            <div class="job-item">
                <img src="imagens/fotografo.png" alt="Fotógrafo" class="job-image">
                <div class="job-title">Fotógrafo</div>
            </div>
            <div class="job-item">
                <img src="imagens/consultor.png" alt="Consultor de Marketing" class="job-image">
                <div class="job-title">Consultor de Marketing</div>
            </div>
            <div class="job-item">
                <img src="imagens/assistente.png" alt="Assistente Virtual" class="job-image">
                <div class="job-title">Assistente Virtual</div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 App de Contratação de Trabalhadores Autônomos</p>
    </footer>
</body>
</html>