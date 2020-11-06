<?php

session_start();

$rua = $_POST['rua'];
$num = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$id = $_SESSION['id'];

if(isset($rua) && isset($bairro) && isset($cidade) && isset($estado) && isset($cep)) {
    $comple = $cidade." - ".$estado;

    $link = mysqli_connect("108.179.253.189", "blogna48_cmcNew", "C4d3m1nh@", "blogna48_cadeMinhaCasa");

    

    $result = $link->query("INSERT INTO imovel_denunciado(usuario_id, logradouro, numero, complemento, bairro, cep) VALUES ($id,'$rua',$num,'$comple','$bairro','$cep')");

    if ($result == true) {
        
        echo "
        <script>
            alert('Denúncia cadastrada com sucesso!')
            location.href = 'home.php'
        </script>";

    }else {

        echo "
        <script>
            alert('Não foi possível cadastrar a denúncia!')
            location.href = 'home.php'
        </script>";

    }

}else {

    echo "
        <script>
            alert('As informações inseridas não são suficientes para realizar a denúncia!')
            location.href = 'denuncia.php'
        </script>";

}