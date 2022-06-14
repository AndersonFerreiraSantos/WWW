<?php 
session_start();
include('../../../banco.php');

$nome=$_POST['nome'];
$responsavel=$_POST['responsavel'];
$ramal=$_POST['ramal'];
$celular=$_POST['celular'];

echo $nome=$_POST['nome'];
echo $responsavel=$_POST['responsavel'];
echo $ramal=$_POST['ramal'];
echo $celular=$_POST['celular'];

if($nome == ''){
    $_SESSION['nome_vazio'] = true;
}
if($responsavel == ''){
    $_SESSION['responsavel_vazio'] = true;
}
if($ramal == ''){
    $_SESSION['ramal_vazio'] = true;
}
if($celular == ''){
    $_SESSION['celular_vazio'] = true;
}
if($nome != '' && $responsavel != '' && $ramal != '' && $celular != ''){

    $sql = "SELECT * FROM impressoras";
    $query = $mysqli->query($sql) or die($mysqli->error);
    $result = $query->fetch_assoc();
    $sql_code = "INSERT INTO filiais (nome, responsavel, ramal, celular) values ('$nome', '$responsavel','$ramal', '$celular')";
    $query_code = $mysqli->query($sql_code) or die ($mysqli->error);
    $_SESSION['filial_cadastrada'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=filiais');
}else{
    $_SESSION['erro'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=filiais');
}
?>
