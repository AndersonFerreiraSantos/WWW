<?php

require_once("conexao.php");


$email = $_POST['email'];
$usuario = $_POST['usuario'];
$nome = $_POST['nome'];
$senha_cript = md5($_POST['senha']);
$senha_original = $_POST['senha'];

// $email = ($conexao, trim($_POST['email']));
// $usuario = ($conexao, trim($_POST['usuario']));
// $nome = ($conexao, trim($_POST['nome']));
// $senha_cript = ($conexao, trim(md5($_POST['senha'])));
// $senha_original = ($conexao, trim(md5($_POST['senha'])));

// $sql = "select count(*) as total from players where usuario = 'teste'";

// $result = mysqli_query($conexao, $sql);

// $row = mysqli_fetch_assoc($result);


// echo "$row[id]"
  //  if($sql['total'] == 1){
  //    $_SESSION['usuario_existe'] = true;
  //    header ('Location: cadastro.php');
  //    exit(); 
//  }

$res_insert = $pdo ->query("INSERT INTO players(email, nome, usuario, senha, senha_cript, data_cadastro)
VALUES ('$email','$nome','$usuario','$senha_original','$senha_cript', NOW())");
 
header ('Location: cadastro.php');
// if($conexao->query($sql) === TRUE){
//   $_SESSION['status_cadastro'] = true;
// }cone

//   $conexao->close();
//   header('Location: cadastro.php');
//   exit;

?>