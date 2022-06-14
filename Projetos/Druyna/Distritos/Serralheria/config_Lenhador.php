<?php
include('../../config_session.php');
include('../../conexao.php');
date_default_timezone_set('America/Sao_Paulo');

$quantidade = $_GET['number_lenhadores'];

$trabalhadores = $bdo_lenhadores;
$start = $bdo_start_Madera;
$modificador = $modificador_madera;
$recursos = $bdo_madera;

$comparacao = $trabalhadores + $bdo_populacao;
if($quantidade > $comparacao){
    $_SESSION['erro_quantidade_desempregado'] = true;
    header('Location:http://localhost/Projetos/Projeto/cidade.php?#bg_serralheria'); 
}
if($quantidade <= $comparacao && $quantidade > -1){
    $diferenca_trabalhadores = $quantidade - $trabalhadores;
    $novo_valor_populacao = $bdo_populacao - $diferenca_trabalhadores;

    $sql = "UPDATE usuario SET populacao='$novo_valor_populacao' WHERE usuario='$user'";
    $conexao->query($sql);

    $sqla = "UPDATE usuario SET lenhadores='$quantidade' WHERE usuario='$user'";
    $conexao->query($sqla);

    $sqlb = "UPDATE usuario SET start_Madera='$time' WHERE usuario='$user'";
    $conexao->query($sqlb);

    $calculo = intval((($time - $start)* $modificador) * $trabalhadores) + $recursos;

    $sqlb = "UPDATE usuario SET madera='$calculo' WHERE usuario='$user'";
    $conexao->query($sqlb);

 
    header('Location:http://localhost/Projetos/Projeto/cidade.php?#bg_serralheria');
}else{
    $_SESSION['erro_quantidade_cientistas'] = true;
    header('Location:http://localhost/Projetos/Projeto/cidade.php?#bg_serralheria'); 
    // echo 'erro';
    // echo "<hr>";
    // echo $quantidade;
    // echo "<hr>";
    // echo $comparacao;
    // echo "<hr>";
    // echo $trabalhadores;

   
}
//UPDATE `login`.`usuario` SET `minerio` = '0', `trigo` = '0', `uva` = '0', `ouro` = '0' WHERE (`usuario_id` = '1');

?>