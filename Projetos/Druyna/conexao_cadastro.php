<?php
session_start();
include("conexao.php");
include('config_session.php');

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header ('Location: cadastro.php');
    exit(); 
}
$sql = "INSERT INTO  usuario (email, nome, usuario, senha, data_cadastro, populacao, start_Mina, status_Mina, opcao_Mina, finish_Mina, tempo_inicio_pesquisa, pesquisa, cientistas, minero, lenhador, ferro)VALUES
                             ('$email', '$nome', '$usuario', '$senha', '$time', '500', '$time', '3', '0', '$time', '$time', '0', '0', '0', '0', '0')";

// if($bdo_populacao == '' ){
//     $sql = "UPDATE usuario SET populacao='500' WHERE usuario='$user'";
//     $sqla = "UPDATE usuario SET status_Mina='3' WHERE usuario='$user'";
//     $sqlb = "UPDATE usuario SET pesquisa='0' WHERE usuario='$user'";
//     $sqlc = "UPDATE usuario SET ferro='0' WHERE usuario='$user'";
//     $conexao->query($sql);
//     $conexao->query($sqla);
//     $conexao->query($sqlb);
//     $conexao->query($sqlc);
//   }

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}
$conexao->close();
header('Location: cadastro.php');
exit;
?>1635376896