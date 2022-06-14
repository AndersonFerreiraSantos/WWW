<?php
session_start();
include("../conexao.php");
include("../config_session.php");
date_default_timezone_set('America/Sao_Paulo');

$opcao= $_GET['botao_mina'];

$sql = "UPDATE usuario SET start_Mina = $time WHERE usuario='$user'";
$conexao->query($sql);
if($opcao == 1){

    $soma_tempo_mina_1 = $time + $ferro_tempo_01;

    $sqlb = "UPDATE usuario SET finish_Mina=$soma_tempo_mina_1 WHERE usuario='$user'";

    $sqlc = "UPDATE usuario SET status_Mina='0' WHERE usuario='$user'";

    $sqla = "UPDATE usuario SET opcao_Mina='1' WHERE usuario='$user'";

    $conexao->query($sqla);
    $conexao->query($sqlc);
    $conexao->query($sqlb);
    header('Location:http://localhost/Projetos/Projeto/cidade.php#bg_mina');
    

}
if($opcao == 2){

    $soma_tempo_mina_1 = $time + $ferro_tempo_02;

    $sqlb = "UPDATE usuario SET finish_Mina=$soma_tempo_mina_1 WHERE usuario='$user'";

    $sqlc = "UPDATE usuario SET status_Mina='0' WHERE usuario='$user'";

    $sqla = "UPDATE usuario SET opcao_Mina='2' WHERE usuario='$user'";

    $conexao->query($sqla);
    $conexao->query($sqlc);
    $conexao->query($sqlb);
    header('Location:http://localhost/Projetos/Projeto/cidade.php#bg_mina');
}
if($opcao == 3){

    $soma_tempo_mina_1 = $time + $ferro_tempo_03;

    $sqlb = "UPDATE usuario SET finish_Mina=$soma_tempo_mina_1 WHERE usuario='$user'";

    $sqlc = "UPDATE usuario SET status_Mina='0' WHERE usuario='$user'";

    $sqla = "UPDATE usuario SET opcao_Mina='3' WHERE usuario='$user'";

    $conexao->query($sqla);
    $conexao->query($sqlc);
    $conexao->query($sqlb);
    header('Location:http://localhost/Projetos/Projeto/cidade.php#bg_mina');
}
if($opcao == 4){

    $soma_tempo_mina_1 = $time + $ferro_tempo_04;

    $sqlb = "UPDATE usuario SET finish_Mina=$soma_tempo_mina_1 WHERE usuario='$user'";

    $sqlc = "UPDATE usuario SET status_Mina='0' WHERE usuario='$user'";

    $sqla = "UPDATE usuario SET opcao_Mina='4' WHERE usuario='$user'";

    $conexao->query($sqla);
    $conexao->query($sqlc);
    $conexao->query($sqlb);
    header('Location:http://localhost/Projetos/Projeto/cidade.php#bg_mina');
}
//-------calculos----



// echo "<script> alert ('Ola'); </script>";


//header('Location:http://localhost/Projetos/Projeto/cidade.php#bg_mina');

// echo $mina_Recurso_1_tempo;

// echo $soma_tempo_mina_1;
// echo "<hr>";
// echo $soma_tempo_mina_1;
// echo "<hr>";
// echo $time;
// echo "<hr>";
// echo $cronometro;
// echo "<hr>";


// if(time()< 1634440644){
//     $sql = "UPDATE usuario SET status_Mina='0' WHERE usuario='$user'";
//     // header ('Location:http://localhost/Projetos/Projeto/cidade.php#bg_mina');
// }else{
//     $sql = "UPDATE usuario SET status_Mina='1' WHERE usuario='$user'";
//     // header ('Location:http://localhost/Projetos/Projeto/cidade.php#bg_mina');
    
// }

// echo $comp;
// echo "<hr>";
// echo $time;
// echo "<hr>";
// echo $user;
// echo "<hr>";
// echo date('d/m/y h:i:s');


//conexão sqli??? perguntar professor

//Status recursos ---------------------------------
//  $status_Pendente = '0';
//  $status_Pronto = '1';

// $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
// $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
// $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
// $senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

// $sql = "UPDATE usuario SET data_cadastro='certo4' WHERE usuario_id=1"; Linha ok

//  $sql = "UPDATE usuario SET data_Mina='2009-10-16 07:08:39' WHERE usuario_id=1"; Alteração data ok

//echo date('d/m/y h:i:s');

// $data = time();
// $espera = 1200;
// $timeo = 1634428870;
// $timeo = $timeo - $time;

// $soma = $data + $espera;

// $busca_segundos = "SELECT status_Mina FROM `login`.`usuario` where usuario='$user'";
// $resultSegundos = mysqli_query($conexao, $busca_segundos) or die ("erro");
// $registro = mysqli_fetch_array($resultSegundos);
// $comp=$registro['segundos'];

// $resultSegundos = mysqli_query($conexao, $busca_segundos) or die ("erro");
// $registro = mysqli_fetch_array($resultSegundos);
// $comp=$registro['segundos'];
// echo "<hr>";
// echo $soma;
// echo "<hr>";
// echo $timeo;

// $sql = "UPDATE usuario SET status_Mina=$soma WHERE usuario='$user'";

// if($conexao->query($sql) === TRUE){
    // $_SESSION['status_cadastro'] = true;
// }
?>

