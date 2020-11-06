<?php
session_start();

if(!isset($_SESSION['id'])){
    header('Location: login.php');
    exit;
    }else{
      $link = mysqli_connect("108.179.253.189", "blogna48_cmcNew", "C4d3m1nh@", "blogna48_cadeMinhaCasa");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./imagem/logo.png">
    <link rel="stylesheet" href="./css/mestilo.css">

    <title> Cadê Minha Casa? </title>

</head>

<body>
    <header>
        <nav>
            <div class="container-fluid">
                <div>
                    <a href="index.php">
                        <img src="./image/Logo completo.png" alt="Página inicial" class="logo-item">
                    </a>
                </div>
                <div class="item-cad"><a href="index.php">Página Inicial</a></div>
                <div class="item-den"><a href="denuncia.php">Denunciar</a></div>
            </div>
        </nav>
    </header>



    <section id="corpo">



        <div id="junto">
            <ul>
                <a id="li_home" href="home.php">
                    <li style="border-top: solid 1px #b3b3b3"> Imóveis Abandonados </li>
                </a>
                <a id="li_mden" href="minhas_denuncias.php">
                    <li style="border-top: solid 1px #b3b3b3"> Minhas Denúncias </li>
                </a>
                <a id="li_logout" href="sair.php">
                    <li style="border-bottom: solid 1px #b3b3b3; border-top: solid 1px #b3b3b3; "> Sair </li>
                </a>
            </ul>
        </div>

    </section>


    <aside id="lateral">

        <h1>Denuncie imóveis em situação de abandono</h1>
        <br>
        <hr>


        <?php
    
        $sql = "select * from imovel_abandonado";
        $result = $link->query($sql);
    
        if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            
               ?>

        <br>


        <div class="box_denuncia" id="imovel">
            <img src="<?php echo $row["imagem"]?>" onclick="destaque(this)" style="width:240px; height:300;">
            <div class="inf">
                <h4><?php echo $row["logradouro"]?></h4>
                <br>
                <p><b>Nº: </b><?php echo $row["numero"]?></p>
                <p><?php echo $row["complemento"]?></p>
                <p><b>Bairro: </b><?php echo $row["bairro"]?></p>
                <p><b>CEP: </b><?php echo $row["cep"]?></p>
            </div>
        </div>
        </div>


        <?php  
            
        } 
        }else{
        echo"Nenhum imóvel cadastrado";  
        }
                
        ?>


    </aside>


</body>


<footer>
    <div class="container-fluid">
        <p id="rodape">&copy; Todos os direitos reservados.</p>

    </div>

</footer>