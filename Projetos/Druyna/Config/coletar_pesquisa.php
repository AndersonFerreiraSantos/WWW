<?php
include("../config_session.php");

if($bdo_tempo_inicio_pesquisa == ''){

     $sql = "UPDATE usuario SET tempo_inicio_pesquisa='$time' WHERE usuario='$user'";
     $conexao->query($sql);

}
$modificado = 0;

$quantidade_pesquisa_segundo = 0.1 + $modificador;

$total_tempo_pesquisa = $time - $bdo_tempo_inicio_pesquisa;

$total_pesquisa_temp = ($bdo_cientistas * $quantidade_pesquisa_segundo) *  $total_tempo_pesquisa;
echo $total_pesquisa_temp;

$total_pesquisa = $total_pesquisa_temp + $bdo_pesquisa;

$sqla = "UPDATE usuario SET pesquisa='$total_pesquisa' WHERE usuario='$user'";
$conexao->query($sqla);

$sqlb = "UPDATE usuario SET tempo_inicio_pesquisa='$time' WHERE usuario='$user'";
$conexao->query($sqlb);

header ('Location:http://localhost/Projetos/Projeto/cidade.php#bg_pesquisa');

echo $total_pesquisa;

//----------Pesquisas-----------
//pesquisa realziada == 1;
//pesquisa não realziada == 0;

?>
