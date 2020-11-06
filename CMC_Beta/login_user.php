<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if(strlen($email) > 3 && strlen($senha) > 3) {
    $senha_cripto = md5($senha);

    $link = mysqli_connect("108.179.253.189", "blogna48_cmcNew", "C4d3m1nh@", "blogna48_cadeMinhaCasa");

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha_cripto'";

    $result = $link -> query($sql);

    $usuarios = mysqli_fetch_assoc($result);

    
    $_SESSION['id'] = $usuarios["usuario_id"];
    $_SESSION['nome'] = $usuarios["usuario"];
    $_SESSION['email'] = $usuarios["email"];
    

    header('Location: home.php');
   
} else{
    echo "
        <script>
            alert('Email ou senha inválidos!')
            location.href = 'login.php'     
        </script>
    ";
}