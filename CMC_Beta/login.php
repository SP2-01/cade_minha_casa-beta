<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="icon" href="./image/logo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;600&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <!-- topo do site -->
            <?php 
            include ('navbar.html');
            ?>
        </header>
        <div class="container-fluid justify-content-center">
            <main id="login">
                <!-- formulário --> 
                <form action="login_user.php" method="POST">
                    <p>Entre na sua conta</p>
                    <input type="email" name="email" placeholder="email" required>
                    </br></br>
                    <input type="password" name="senha" placeholder="senha" required>
                    <br></br>
                    <input type="submit" value="Clique aqui para entrar" class="buttonconfirm">
                    
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