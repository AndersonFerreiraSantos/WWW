<?php 
session_start();
include('../../../banco.php');

$nome=$_POST['nome'];
$modelo=$_POST['modelo'];
$filial=$_POST['filial'];
$secao=$_POST['secao'];
$ip=$_POST['ip'];

if($nome == ''){
    $_SESSION['nome_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}
if($modelo == ''){
    $_SESSION['modelo_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}
if($filial == ''){
    $_SESSION['filial_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}
if($secao == ''){
    $_SESSION['secao_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}
if($ip == ''){
    $_SESSION['ip_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}

if($nome != '' && $modelo != '' && $filial != '' && $secao != '' && $ip != ''){

    $sql = "SELECT * FROM impressoras";
    $query = $mysqli->query($sql) or die($mysqli->error);
    $result = $query->fetch_assoc();
    $sql_code = "INSERT INTO impressoras (nome, modelo, filial, secao, ip) values ('$nome', '$modelo','$filial', '$secao', '$ip')";
    $query_code = $mysqli->query($sql_code) or die ($mysqli->error);
    $_SESSION['impressora_cadastrada'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}else{
    $_SESSION['erro'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}

if($deu_certo){
echo 'deu certo';}



?>
