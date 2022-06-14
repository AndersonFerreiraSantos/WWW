<?php
session_start();
include("../../conexao.php");
include("../../config_session.php");
include ('config_Lenhador.php');
date_default_timezone_set('America/Sao_Paulo');

$opcao=$_GET['opcao'];
$coletar=$_GET['coletar'];


if($opcao == 1){
    $calculo_tempo_final = $time + $carvao_tempo_01;
    $calculo_lenhadores = $bdo_lenhadores - $carvoeiros_01;
    $calculo_carvoeiros = $carvoeiros_01;
    $calculo_madera = $bdo_madera - $necessario_madera_carvao_01;

    $sqla = "UPDATE usuario SET start_Carvao=$time WHERE usuario='$user'";
    $sqlb = "UPDATE usuario SET finish_Carvao=$calculo_tempo_final WHERE usuario='$user'";
    $sqlc = "UPDATE usuario SET status_Carvao='produzindo_01' WHERE usuario='$user'";
    $sqld = "UPDATE usuario SET lenhadores=$calculo_lenhadores WHERE usuario='$user'";
    $sqle = "UPDATE usuario SET carvoeiros=$calculo_carvoeiros WHERE usuario='$user'";
    $sqlf = "UPDATE usuario SET madera=$calculo_madera WHERE usuario='$user'";

    $conexao->query($sqla);
    $conexao->query($sqlb);
    $conexao->query($sqlc);
    $conexao->query($sqld);
    $conexao->query($sqle);
    $conexao->query($sqlf);

    
    header('Location:../../cidade.php#bg_serralheria');
}

if($opcao == 2){
    $calculo_tempo_carvao= $time + $carvao_tempo_02;
    $sqla = "UPDATE usuario SET start_Carvao=$time WHERE usuario='$user'";
    $sqlb = "UPDATE usuario SET finish_Carvao=$calculo_tempo_carvaoWHERE usuario='$user'";
    $conexao->query($sqla);
    $conexao->query($sqlb);
}


if($opcao == 3){
    $calculo_tempo_carvao= $time + $carvao_tempo_03;
    $sqla = "UPDATE usuario SET start_Carvao=$time WHERE usuario='$user'";
    $sqlb = "UPDATE usuario SET finish_Carvao=$calculo_tempo_carvaoWHERE usuario='$user'";
    $conexao->query($sqla);
    $conexao->query($sqlb);
}


if($opcao == 4){
    $calculo_tempo_carvao= $time + $carvao_tempo_04;
    $sqla = "UPDATE usuario SET start_Carvao=$time WHERE usuario='$user'";
    $sqlb = "UPDATE usuario SET finish_Carvao=$calculo_tempo_carvaoWHERE usuario='$user'";
    $conexao->query($sqla);
    $conexao->query($sqlb);
}

if($coletar == 1){
    $calculo_carvao = $bdo_carvao + $producao_carvao_01;
    $calculo_lenhadores = $bdo_lenhadores + $bdo_carvoeiros;
    $sqla = "UPDATE usuario SET status_Carvao='livre' WHERE usuario='$user'";
    $sqlb = "UPDATE usuario SET carvao=$calculo_carvao WHERE usuario='$user'";
    $sqlc = "UPDATE usuario SET lenhadores=$calculo_lenhadores WHERE usuario='$user'";
    $sqld = "UPDATE usuario SET carvoeiros=0 WHERE usuario='$user'";
    $conexao->query($sqla);
    $conexao->query($sqlb);
    $conexao->query($sqlc);
    $conexao->query($sqld);

    //header('Location:../../cidade.php#bg_serralheria');
}


// $opcao= $_GET['botao_mina'];

// $sql = "UPDATE usuario SET start_Mina = $time WHERE usuario='$user'";
// $conexao->query($sql);
// if($opcao == 1){

//     $soma_tempo_mina_1 = $time + $ferro_tempo_01;

//     $sqlb = "UPDATE usuario SET finish_Mina=$soma_tempo_mina_1 WHERE usuario='$user'";

//     $sqlc = "UPDATE usuario SET status_Mina='0' WHERE usuario='$user'";

//     $sqla = "UPDATE usuario SET opcao_Mina='1' WHERE usuario='$user'";

//     $conexao->query($sqla);
//     $conexao->query($sqlc);
//     $conexao->query($sqlb);
//     header('Location:http://localhost/Projetos/Projeto/cidade.php#bg_mina');
    

// }
// if($opcao == 2){

//     $soma_tempo_mina_1 = $time + $ferro_tempo_02;

//     $sqlb = "UPDATE usuario SET finish_Mina=$soma_tempo_mina_1 WHERE usuario='$user'";

//     $sqlc = "UPDATE usuario SET status_Mina='0' WHERE usuario='$user'";

//     $sqla = "UPDATE usuario SET opcao_Mina='2' WHERE usuario='$user'";

//     $conexao->query($sqla);
//     $conexao->query($sqlc);
//     $conexao->query($sqlb);
//     header('Location:http://localhost/Projetos/Projeto/cidade.php#bg_mina');
// }
// if($opcao == 3){

//     $soma_tempo_mina_1 = $time + $ferro_tempo_03;

//     $sqlb = "UPDATE usuario SET finish_Mina=$soma_tempo_mina_1 WHERE usuario='$user'";

//     $sqlc = "UPDATE usuario SET status_Mina='0' WHERE usuario='$user'";

//     $sqla = "UPDATE usuario SET opcao_Mina='3' WHERE usuario='$user'";

//     $conexao->query($sqla);
//     $conexao->query($sqlc);
//     $conexao->query($sqlb);
//     header('Location:http://localhost/Projetos/Projeto/cidade.php#bg_mina');
// }
// if($opcao == 4){

//     $soma_tempo_mina_1 = $time + $ferro_tempo_04;

//     $sqlb = "UPDATE usuario SET finish_Mina=$soma_tempo_mina_1 WHERE usuario='$user'";

//     $sqlc = "UPDATE usuario SET status_Mina='0' WHERE usuario='$user'";

//     $sqla = "UPDATE usuario SET opcao_Mina='4' WHERE usuario='$user'";

//     $conexao->query($sqla);
//     $conexao->query($sqlc);
//     $conexao->query($sqlb);
//     header('Location:http://localhost/Projetos/Projeto/cidade.php#bg_mina');
// }
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

