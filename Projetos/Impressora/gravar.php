<?php
include ('banco.php');

$ID = intval($_GET['ID']);

$setor = $_GET['setor'];
$modelo = $_GET['modelo'];
$driver= $_GET['driver'];
$toner= $_GET['toner'];
$tipo=$_GET['tipo'];


echo $ID = intval($_GET['ID']);
echo "<hr>";
echo $setor;
echo "<hr>";
echo $modelo;
echo "<hr>";
echo $driver;
echo "<hr>";
echo $toner;
echo "<hr>";
echo $tipo;


if($tipo == 1){
    $tipo_alterado = 'Preto e Branco';
}elseif($tipo == 2){
    $tipo_alterado = 'Colorido';
}else{
    echo 'erro';
}

echo $tipo_alterado;

$sql_cliente = "SELECT * FROM cadastro_impressoras WHERE ID = '$ID'";
$query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
$cliente = $query_cliente->fetch_assoc();

$sql_code="UPDATE cadastro_impressoras SET setor = '$setor',modelo = '$modelo',driver = '$driver',toner = '$toner', tipo= '$tipo_alterado'  WHERE ID = '$ID'";

$query_clientes = $mysqli->query($sql_code) or die ($mysqli->error);
if($deu_certo){
echo 'deu certo';}

header('Location:cadastro_impressoras.php');

?>