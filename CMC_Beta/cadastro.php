<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="./image/logo.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;600&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <!-- Topo do site -->
        <?php 
        include ('navbar.html');
        ?>
    </header>

    <div class="container-fluid">
    <h1><b>Cadastre-se e ajude pessoas <br> ao seu redor!</b></h1>
        <main id="cadastro">
            <!-- Formulário -->
            <form action="cadastro_user.php" method="POST" >
                
                <input type="text" name="nome" placeholder="Nome" required>
                </br></br>
                <input type="email" name="email" placeholder="Email" required>
                <br></br>
                <input type="password" name="senha" placeholder="Senha" required>
                <br></br>
                <input type="password" name="conf_senha" placeholder="Confirme sua senha" required>
                <br></br>
                <button class="buttonconfirm" type="submit"> Confirme seu cadastro </button>
            </form>
        </main>
    </div>
</body>
    <footer>
            <div class="container-fluid">
            <p id="rodape">Cadê Minha Casa 2021 &copy; Todos os direitos reservados.</p>

        </div>

    </footer>

</html>