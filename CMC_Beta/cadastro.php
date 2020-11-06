<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="icon" href="./image/logo.png" />
</head>

<body>
    <header>
        <!-- Topo do site -->
        <nav>
            <div class="container">
                <div>
                    <a href="./index.php">
                        <img src="./image/Logo completo.png" alt="Página inicial" class="logo-item">
                    </a>
                </div>
                <!--<div class="item-cad"><a href="cadastro.php">Cadastre-se</a></div>-->
                <div class="item-login"><a href="login.php">Login</a></div>
            </div>
        </nav>
    </header>

    <main id="cadastro">
        <!-- Formulário -->
        <form action="cadastro_user.php" method="POST">
            <p><b>Cadastre-se</b></p>
            <input type="text" name="nome" placeholder="Digite seu nome completo" required>
            </br></br>
            <input type="email" name="email" placeholder="Digite seu email" required>
            <br></br>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
            <br></br>
            <input type="password" name="conf_senha" placeholder="Confirme sua senha" required>
            <br></br>
            <input class="buttonconfirm" type="submit" value="CONFIRMAR CADASTRO">
        </form>
    </main>
</body>

</html>