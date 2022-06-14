<?php
include('../banco.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$filial = $_POST['filial'];

$sqli_usuario = $mysqli->query("SELECT * FROM usuarios WHERE usuario = '$usuario'");

if(mysqli_num_rows($sqli_usuario) >= 1){
    $_SESSION['usuario_existente'] = true;
    header('Location:cadastrar.php');
}else{
    $sqli_usuario = "INSERT INTO usuarios (usuario, senha, filial, nivel) values ('$usuario', '$senha', '$filial', '0')";
    $query_usuario = $mysqli->query($sqli_usuario) or die($mysqli->error);
    $_SESSION['usuario_cadastrado'] = true;
    header('Location:cadastrar.php');
}
?>