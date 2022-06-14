<?php
session_start();
include("banco.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


echo $senha, $usuario;

$sqli_usuario="SELECT * FROM usuarios WHERE usuario = '$usuario'";
$query_usuario = $mysqli->query($sqli_usuario) or die($mysqli->error);
$usuario = $query_usuario->fetch_assoc();

$db_senha = $usuario['senha'];
$db_usuario = $usuario['usuario'];

if($db_senha == $senha){
    $_SESSION['usuario'] = $db_usuario;
    header('Location:Painel/sidebar-04/painel.php');
}else{
    $_SESSION['login_incorreto'] = true;
    header('Location:index.php');
    exit(); 
}
?>