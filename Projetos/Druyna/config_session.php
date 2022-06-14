<?php
session_start();
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');

$user = $_SESSION['usuario'];



$buscar = "SELECT * FROM login.usuario where usuario='$user'";
$result = mysqli_query($conexao, $buscar) or die ("erro");
$registro = mysqli_fetch_array($result);

// ---------------BDO----------------------------------------------------------------------------------------------
//___________________Cadastro________________________________________
$bdo_email=$registro['email'];
$bdo_nome=$registro['nome'];
$bdo_data_cadastro=$registro['data_cadastro'];

//_________________Trabalhadores_____________________________________
$bdo_populacao=$registro['populacao'];

$bdo_cientistas=$registro['cientistas'];
$bdo_lenhadores=$registro['lenhadores'];
$bdo_mineros=$registro['mineros'];
$bdo_fazenderos=$registro['fazenderos'];
$bdo_viticultores=$registro['viticultores'];
$bdo_banqueros=$registro['banqueros'];


//_________________Recursos-Primarios_____________________________________
$bdo_pesquisa=$registro['pesquisa'];
$bdo_madera=$registro['madera'];
$bdo_minerio=$registro['minerio'];
$bdo_uva=$registro['uva'];
$bdo_trigo=$registro['trigo'];
$bdo_ouro=$registro['ouro'];

//_________________start-Primarios_____________________________________
$bdo_start_Pesquisa=$registro['start_Pesquisa'];
$bdo_start_Madera=$registro['start_Madera'];
$bdo_start_Minerio=$registro['start_Minerio'];
$bdo_start_Uva=$registro['start_Uva'];
$bdo_start_Trigo=$registro['start_Trigo'];
$bdo_start_Ouro=$registro['start_Ouro'];

//_________________Recursos-Derivados_____________________________________
$bdo_carvao=$registro['carvao'];


$bdo_finish_Mina=$registro['finish_Mina'];
$bdo_start_Mina=$registro['start_Mina'];
$bdo_status_Mina=$registro['status_Mina'];


$bdo_finish_Carvao=$registro['finish_Carvao'];
$bdo_start_Carvao=$registro['start_Carvao'];
$bdo_status_Carvao=$registro['status_Carvao'];


$bdo_ferro=$registro['ferro'];
$bdo_carvao=$registro['carvao'];

$bdo_opcao_Mina=$registro['opcao_Mina'];
$bdo_start_Carvao=$registro['start_Carvao'];

//_________________Trabalhadores-Secundarios____________________________________
$bdo_carvoeiros=$registro['carvoeiros'];

//---------simplificação---------
$time = time();

// echo 'teste';

//----------Modificadores---------
$modificador_pesquisa = 0.01;
$modificador_madera = 0.01;
$modificador_minerio = 0.01;
$modificador_uva = 0.01;
$modificador_trigo = 0.01;
$modificador_ouro = 0.01;
//------------------------------------------------------------------------Painel ADM CRIAÇão------------
//----------MINA---------------
$producao_ferro_01 = 100;
$ferro_carvao_01 = 20;
$ferro_minerio_01 = 300;
$ferro_tempo_01 = 60;
$ferro_mineros_01 = 10;


$producao_ferro_02 = 100 *2;
$ferro_carvao_02 = 20 *2;
$ferro_minerio_02 = 300 *2;
$ferro_tempo_02 = 60 *2; 
$ferro_mineros_02 = 10 *2;

$producao_ferro_03 = 100 *3;
$ferro_carvao_03 = 20 *3;
$ferro_minerio_03 = 300 *3;
$ferro_tempo_03 = 60 *3;
$ferro_mineros_03 = 10 *3;

$producao_ferro_04 = 100 *4;
$ferro_carvao_04 = 20 *4;
$ferro_minerio_04 = 300 *4;
$ferro_tempo_04 = 60 *4;
$ferro_mineros_04 = 10 *4;

//----------SERRALHERIA---------------
$producao_carvao_01 = 100;
$necessario_madera_carvao_01 = 10000;
$carvao_tempo_01 = 5;
$carvoeiros_01 = 10;

$producao_carvao_02 = 100 *2;
$necessario_madera_carvao_02 = 60 *2;
$carvao_tempo_02 = 60 *2;
$carvoeiros_02= 10 *2;

$producao_carvao_03 = 100 *3;
$necessario_madera_carvao_03 = 60 *3;
$carvao_tempo_03 = 60 *3;
$carvoeiros_03 = 10 *3;

$producao_carvao_04 = 100 *4;
$necessario_madera_carvao_04 = 60 *4;
$carvao_tempo_04 =  60 *4;
$carvoeiros_04 = 10 *4;



// echo $bdo_email;
// echo "<hr>";
// echo $bdo_nome;
// echo "<hr>";
// echo $bdo_data_cadastro;
// echo "<hr>";
// echo $bdo_Mina;
// echo "<hr>";
// echo $bdo_star_Mina;
// echo "<hr>";
// echo $bdo_status_Mina;
// echo "<hr>";
// echo $bdo_ferro;


//Valores recursos----------------------------------------
// $recursos_Mina_1 = 150;

//Status recursos ---------------------------------
// $status_Pronto = 'Pronto';
// $status_Pendente = 'Pendente';


// $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
// $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
// $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
// $senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));


// $sql = "UPDATE usuario SET data_cadastro='certo4' WHERE usuario_id=1"; Linha ok

//  $sql = "UPDATE usuario SET data_Mina='2009-10-16 07:08:39' WHERE usuario_id=1"; Alteração data ok


//  echo "<hr>";

//echo date('d/m/y h:i:s');



// $time = time();



// $data = time();
// $espera = 1200;
// $timeo = 1634428870;
// $timeo = $timeo - $time;

// $soma = $data + $espera;


// $resultSegundos = mysqli_query($conexao, $busca_segundos) or die ("erro");
// $registro = mysqli_fetch_array($resultSegundos);
// $comp=$registro['segundos'];

// if(time()< 1634440644){
//     $sql = "UPDATE usuario SET status_Mina='$status_Pendente' WHERE usuario='$user'";
//     // echo "Não está pronto";
//     // echo "<hr>";
// }else{
//     $sql = "UPDATE usuario SET status_Mina='$status_Pronto' WHERE usuario='$user'";
//     // echo "Ficou pronto";
//     // echo "<hr>";
//     // header ('Location:http://localhost/Projetos/Projeto/cidade.php#bg_mina');
    


// }

//  echo $bdo_email;
//  echo "<hr>";
//  echo $time;
//  echo "<hr>";
//  echo $user;
//  echo "<hr>";
//  echo date('d/m/y h:i:s');



// echo "<hr>";
// echo $soma;
// echo "<hr>";
// echo $timeo;



// $sql = "UPDATE usuario SET status_Mina=$soma WHERE usuario='$user'";

// if($conexao->query($sql) === TRUE){
//     $_SESSION['status_cadastro'] = true;
// }



