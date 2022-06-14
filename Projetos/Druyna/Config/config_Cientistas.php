<?php
include("../config_session.php");
date_default_timezone_set('America/Sao_Paulo');


$quantidade = $_GET['number_cientista'];
$comparacao1 = $bdo_cientistas + $bdo_populacao;

if($quantidade > $comparacao1){
    $_SESSION['erro_quantidade_desempregado'] = true;
    header('Location:http://localhost/Projetos/Projeto/cidade.php?#bg_pesquisa'); 
}
if($quantidade < $comparacao1 && $quantidade > -1){
    $diferenca_cientistas = $quantidade - $bdo_cientistas;
    $novo_valor_populacao = $bdo_populacao - $diferenca_cientistas;


    $sql = "UPDATE usuario SET populacao='$novo_valor_populacao' WHERE usuario='$user'";
    $conexao->query($sql);

    $sqla = "UPDATE usuario SET cientistas='$quantidade' WHERE usuario='$user'";
    $conexao->query($sqla);

    header('Location:http://localhost/Projetos/Projeto/cidade.php?#bg_pesquisa');
}else{
    $_SESSION['erro_quantidade_cientistas'] = true;
    header('Location:http://localhost/Projetos/Projeto/cidade.php?#bg_pesquisa'); 
}
echo "<br>";
echo $diferenca_cientistas;
echo "<br>";
echo "<br>";
echo $novo_valor_cientistas ;
echo "<br>";
echo $quantidade;
?>