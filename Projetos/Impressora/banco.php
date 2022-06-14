<?php
session_start();
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'NP3';






date_default_timezone_set('America/Sao_Paulo');
$data= date("H:m:s - d/m/Y");

$mysqli = new mysqli($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

$conn = mysqli_connect($bdServidor,$bdUsuario,$bdSenha, $bdBanco);

$lista_impressoras =  buscar_impressoras($conn);

$lista_toners =  buscar_toner($conn);

$lista_toners_preto =  buscar_toner_preto($conn);

$lista_toners_colorido =  buscar_toner_colorido($conn);

$lista_usuarios =  buscar_usuarios($conn);

function buscar_usuarios($conn){
    $sqlBusca = 'SELECT * FROM impressoras';
    $resultado = mysqli_query($conn, $sqlBusca);
   
    $usuarios = array();
    while($usuario = mysqli_fetch_assoc($resultado)){
        $usuarios[] = $usuario;
    }
    return $usuarios;
}

function buscar_impressoras($conn){
    $sqlBusca = 'SELECT * FROM cadastro_impressoras';
    $resultado = mysqli_query($conn, $sqlBusca);
   
    $impressoras = array();
    while($impressora = mysqli_fetch_assoc($resultado)){
        $impressoras[] = $impressora;
    }
    return $impressoras;
}

function buscar_entrada_toner($conn){
    $sqlBusca = 'SELECT * FROM entrada_toner ';
    $resultado = mysqli_query($conn, $sqlBusca);
   
    $impressoras = array();
    while($impressora = mysqli_fetch_assoc($resultado)){
        $impressoras[] = $impressora;
    }
    return $impressoras;
}	

function buscar_toner($conn){
    $sqlBusca = 'SELECT * FROM estoque_toner';
    $resultado = mysqli_query($conn, $sqlBusca);
   
    $toners = array();
    while($toner = mysqli_fetch_assoc($resultado)){
        $toners[] = $toner;
    }
    return $toners;
}	

function buscar_toner_preto($conn){
    $sqlBusca = 'SELECT * FROM estoque_toner WHERE tipo=1;'; 
    $resultado = mysqli_query($conn, $sqlBusca);
   
    $toners = array();
    while($toner = mysqli_fetch_assoc($resultado)){
        $toners[] = $toner;
    }
    return $toners;
}	

function buscar_toner_colorido($conn){
    $sqlBusca = 'SELECT * FROM estoque_toner WHERE tipo=2;'; 
    $resultado = mysqli_query($conn, $sqlBusca);
   
    $toners_colorido = array();
    while($toner_colorido = mysqli_fetch_assoc($resultado)){
        $toners_colorido[] = $toner_colorido;
    }
    return $toners_colorido;
}	

//teste
//teste
//teste