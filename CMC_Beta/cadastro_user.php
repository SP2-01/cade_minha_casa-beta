<?php

$nome = ($_POST['nome']);
$email = ($_POST['email']);
$senha = ($_POST['senha']);
$conf_senha = ($_POST['conf_senha']);

if(strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && $senha == $conf_senha){

    $senha_cripto = md5($senha);

    $link = mysqli_connect("108.179.253.189", "blogna48_cmcNew", "C4d3m1nh@", "blogna48_cadeMinhaCasa");

    $sql = "INSERT INTO usuario (usuario, email, senha) VALUES ('$nome','$email','$senha_cripto')";

    $link -> query($sql);

    echo "<script> 
            alert('Cadastro efetuado com sucesso!') 
            window.location.href= 'login.php'
        </script>";
} 
else if($senha != $conf_senha){
    echo "<script> 
            alert('As senhas devem ser iguais. Tente novamente.') 
            window.location.href= 'cadastro.php'
        </script>";
}
else if(strlen($nome) <= 3){
    echo "<script> 
            alert('Nome invalido, digite um nome válido.') 
            window.location.href= 'cadastro.php'
        </script>";
}
else if(strlen($email) <= 3){
    echo "<script> 
            alert('Email inválido, digite um e-mail válido.') 
            window.location.href= 'cadastro.php'
        </script>";
}
else if(strlen($senha) <= 3){
    echo "<script> 
            alert('Senha inválida, digite uma senha válida.') 
            window.location.href= 'cadastro.php'
        </script>";
}

?>