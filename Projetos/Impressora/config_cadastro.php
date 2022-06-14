<?php

include('banco.php');

$usuario = $_GET['usuario'];
$senha = $_GET['senha'];
$nivel = $_GET['nivel'];

echo $usuario;

echo "<hl>";
echo $senha;

$result_usuario = "INSERT INTO impressoras (usuario, senha, nivel) values ('$usuario', '$senha', $nivel)";
$result_usuario = mysqli_query($conn, $result_usuario);

header('Location:index.php');

?>