<?php
session_start();
include("../config_session.php");
date_default_timezone_set('America/Sao_Paulo');


$quantidade = $_GET['number_minero'];
$comparacao1 = $bdo_minero + $bdo_populacao;

echo $quantidade;

if($quantidade > $comparacao1){
    $_SESSION['erro_quantidade_desempregado'] = true;
    header('Location:http://localhost/Projetos/Projeto/cidade.php?#bg_mina'); 
}
if($quantidade < $comparacao1 && $quantidade > -1){
    $diferenca_minero = $quantidade - $bdo_minero;
    $novo_valor_populacao = $bdo_populacao - $diferenca_minero;
    // echo "<br>";
    // echo $diferenca_cientistas;
    // echo "<br>";
    // $novo_valor_cientistas = $quantidade;
    // echo "<br>";
    // echo $novo_valor_cientistas ;
    // echo "<br>";
    // echo $quantidade;

    $sql = "UPDATE usuario SET populacao='$novo_valor_populacao' WHERE usuario='$user'";
    $conexao->query($sql);

    $sqla = "UPDATE usuario SET minero='$quantidade' WHERE usuario='$user'";
    $conexao->query($sqla);

    header('Location:http://localhost/Projetos/Projeto/cidade.php?#bg_mina');
}else{
    $_SESSION['erro_quantidade_minero'] = true;
    header('Location:http://localhost/Projetos/Projeto/cidade.php?#bg_mina'); 
}
?>