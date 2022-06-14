<?php
session_start();
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'Xerox';

//$teste = "banco ok";
echo $teste;

$session = $_SESSION['usuario'];


// $sql_login = "SELECT * FROM usuarios WHERE usuario = '$session'";
// $query_login = $mysqli->query($sql_login) or die($mysqli->error);
// $login = $query_login->fetch_assoc();


date_default_timezone_set('America/Sao_Paulo');
$data= date("H:m:s - d/m/Y");



$mysqli = new mysqli($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

$banco= "banco ok";


$lista_modelo_impressoras =  buscar_modelo_impressoras($mysqli);

function buscar_modelo_impressoras($mysqli){
    $sqlBusca = 'SELECT * FROM modelo_impressoras';
    $resultado = mysqli_query($mysqli, $sqlBusca);
   
    $modelo_impressoras = array();
    while($modelo_impressora = mysqli_fetch_assoc($resultado)){
        $modelo_impressoras[] = $modelo_impressora;
    }
    return $modelo_impressoras;
}

$lista_impressoras =  buscar_impressoras($mysqli);

function buscar_impressoras($mysqli){
    $sqlBusca = 'SELECT * FROM impressoras';
    $resultado = mysqli_query($mysqli, $sqlBusca);
   
    $impressoras = array();
    while($impressora = mysqli_fetch_assoc($resultado)){
        $impressoras[] = $impressora;
    }
    return $impressoras;
}

$lista_filiais =  buscar_filiais($mysqli);

function buscar_filiais($mysqli){
    $sqlBusca = 'SELECT * FROM filiais';
    $resultado = mysqli_query($mysqli, $sqlBusca);
   
    $filiais = array();
    while($filial = mysqli_fetch_assoc($resultado)){
        $filiais[] = $filial;
    }
    return $filiais;
}


?>
