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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="icon" href="./image/logo.png" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;600&display=swap" rel="stylesheet">
        <title>Sinalize um imóvel</title>
    </head>

    <body>

        <header>
            <!-- topo do site -->
            <?php 
                include ('navbar.html');
            ?>
        </header>
        <div class="container-fluid">
            <h1><b>COM ESSA AÇÃO <br> VOCÊ PODE AJUDAR MUITA GENTE!</b></h1>

            <main id="denuncia">
                <!-- formulário -->
                
                <form action="cadastra_denuncia.php" method="post">
                    <p>Coloque abaixo os dados do <br> local que você deseja sinalizar:</p>

                    <input type="text" name="cep" placeholder="Digite seu CEP">
                    <br></br>
                    <input type="text" name="rua" placeholder="Endereço">
                    <br></br>
                    <input type="text" name="numero" placeholder="Número">
                    <br></br>
                    <input type="text" name="bairro" placeholder="Bairro">
                    <br></br>
                    <input type="text" name="cidade" placeholder="Cidade">
                    <br></br>
                    <input type="text" name="estado" placeholder="Estado">
                    </br></br>
                    

                    <button type="submit" id="buttondenuncia"> Quero mapear este imóvel! </button>
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