<?php
session_start();

if(!isset($_SESSION['nome'])){
    header('Location: login.html');
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="icon" href="./image/logo.png" />
    <title>Denúncia</title>
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
                <div class="item-cad"><a href="home.php">Página Inicial</a></div>
                <div class="item-login"><a href="minhas_denuncias.php">Minhas Denúncias</a></div>
            </div>
        </nav>
    </header>

    <main id="denuncia">
        <!-- formulário -->
        <form action="cadastra_denuncia.php" method="post">
            <p><b>Denuncie</b></p>


            <input type="text" name="rua" placeholder="Digite o endereço">
            <br></br>
            <input type="text" name="numero" placeholder="Número">
            <br></br>
            <input type="text" name="bairro" placeholder="Bairro">
            <br></br>
            <input type="text" name="cidade" placeholder="Cidade">
            <br></br>
            <input type="text" name="estado" placeholder="Estado">
            </br></br>
            <input type="text" name="cep" placeholder="Digite seu CEP">
            <br></br>

            <input type="submit" value="CONFIRMAR DENÚNCIA" id="buttondenuncia">
        </form>
    </main>
</body>

</html>