<?php
session_start();
include("../conexao.php");
include("../config_session.php");
date_default_timezone_set('America/Sao_Paulo');

$soma = $mina_Recurso_1;
if($bdo_status_Mina == 1){
    $sql = "UPDATE usuario SET ferro='$soma' WHERE usuario='$user'";
    $teste = "UPDATE usuario SET status_Mina='3' WHERE usuario='$user'";
    header ('Location:http://localhost/Projetos/Projeto/cidade.php#bg_mina');
}
echo $soma;

$conexao->query($sql);
$conexao->query($teste);

// $soma = $bdo_ferro + $mina_Recurso_1;

//Valores recursos----------------------------------------
// $recursos_Mina_1 = 150;

//Status recursos ---------------------------------
//  $status_Pendente = '0';
//  $status_Pronto = '1';   

// echo $comp;
// echo "<hr>";
// echo $time;
// echo "<hr>";
// echo $user;
// echo "<hr>";
// echo date('d/m/y h:i:s');

//conexão sqli??? perguntar professor

// session_start();
// date_default_timezone_set('America/Sao_Paulo');
// include('conexao');
// include('../config_session.php');

// $soma = $bdo_ferro + $mina_Recurso_1;

// echo $soma;


// $teste = "UPDATE usuario SET ferro='$soma' WHERE usuario='$user'";

?>
