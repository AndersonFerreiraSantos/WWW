<?php
session_start();
include("banco.php");

$usuario = $_GET['usuario'];
$senha = $_GET['senha'];


echo $senha, $usuario;

$sql_cliente="SELECT * FROM impressoras WHERE usuario = '$usuario'";
$query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
$login = $query_cliente->fetch_assoc();

$db_senha = $login['senha'];
$db_usuario = $login['usuario'];

if($db_senha == $senha && $db_usuario == $usuario ){
    $_SESSION['usuario'] = $usuario;
    echo "erro2";
    header('Location:painel.php');
}else{
    $_SESSION['login_incorreto'] = true;
    header('Location:index.php');
    echo "erro1";
    exit(); 

}

echo $cliente['usuario'];
echo $cliente['senha'];

?>