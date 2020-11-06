<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="icon" href="./image/logo.png">
</head>

<body>
    <header>
        <!-- topo do site -->
        <nav>
            <div class="container">
                <div>
                    <a href="./index.php">
                        <img src="./image/Logo completo.png" alt="Página inicial" class="logo-item">
                    </a>
                </div>
                <div class="item-cad"><a href="cadastro.php">Cadastre-se</a></div>
                <!--<div class="item-login"><a href="login.php"></a>Login</a></div>-->
            </div>
        </nav>
    </header>

    <main id="login">
        <!-- formulário -->
        <form action="login_user.php" method="POST">
            <p><b>Entre na sua conta</b></p>
            <input type="email" name="email" placeholder="Digite seu e-mail" required>
            </br></br>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
            <br></br>
            <input type="submit" value="ENTRAR NA CONTA" class="buttonconfirm">
        </form>
    </main>
</body>

</html>