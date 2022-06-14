<?php
session_start();
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));


// $sql = "UPDATE usuario SET data_cadastro='certo4' WHERE usuario_id=1"; Linha ok

//  $sql = "UPDATE usuario SET data_Mina='2009-10-16 07:08:39' WHERE usuario_id=1"; Alteração data ok

$user = $_SESSION['usuario'];


 echo "<hr>";

//echo date('d/m/y h:i:s');



$time = time();



$data = time();
$espera = 1200;
$timeo = 1634428870;
$timeo = $timeo - $time;

$soma = $data + $espera;

$busca_segundos = "SELECT segundos FROM `login`.`usuario` where usuario='$user'";
$result = mysqli_query($conexao, $busca_segundos) or die ("erro");
$registro = mysqli_fetch_array($result);
$comp=$registro['segundos'];

if(time()< 1634440644){
    echo "Não está pronto";
    echo "<hr>";
}
header ('Location:http://localhost/Projetos/Projeto');

echo $comp;
echo "<hr>";
echo $time;
echo "<hr>";
echo $user;
echo "<hr>";
echo date('d/m/y h:i:s');



// echo "<hr>";
// echo $soma;
// echo "<hr>";
// echo $timeo;



//$sql = "UPDATE usuario SET segundos=$soma WHERE usuario='$user'";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

?>


