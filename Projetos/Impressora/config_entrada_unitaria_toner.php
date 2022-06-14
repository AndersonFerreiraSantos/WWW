<?php 
include('banco.php');
$acao = $_GET['acao'];
$ID = $_GET['ID'];
$preto = $_GET['preto'];
$amarelo = $_GET['amarelo'];
$ciano = $_GET['ciano'];
$magenta = $_GET['magenta'];

echo $acao;
echo "<hr>";
echo $ID;
echo "<hr>";
echo $data;
echo "<hr>";


$sql_cliente = "SELECT * FROM estoque_toner WHERE ID = '$ID'";
$query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
$cliente = $query_cliente->fetch_assoc();

$db_preto = $cliente['preto'];
$db_ciano = $cliente['ciano'];
$db_amarelo = $cliente['amarelo'];
$db_magenta = $cliente['magenta'];

$soma_preto = $db_preto + $preto;
$soma_amarelo = $db_amarelo + $amarelo;
$soma_ciano = $db_ciano + $ciano;
$soma_magenta = $db_magenta + $magenta;

$sub_preto = $db_preto - $preto;
$sub_amarelo = $db_amarelo - $amarelo;
$sub_ciano = $db_ciano - $ciano;
$sub_magenta = $db_magenta - $magenta;



if($acao == 1){ 

     $sql_code="UPDATE estoque_toner SET preto = '$soma_preto',amarelo = '$soma_amarelo',ciano = '$soma_ciano',magenta = '$soma_magenta', data_entrada = '$data' WHERE ID = '$ID'";
     $query_clientes = $mysqli->query($sql_code) or die ($mysqli->error);
     header('Location:cadastro_toner.php');

}elseif($acao == 2){

    $sql_code="UPDATE estoque_toner SET preto = '$sub_preto',amarelo = '$sub_amarelo',ciano = '$sub_ciano',magenta = '$sub_magenta', data_saida = '$data' WHERE ID = '$ID'";
    $query_clientes = $mysqli->query($sql_code) or die ($mysqli->error);
    header('Location:cadastro_toner.php');
}else{
    echo "erro";
}


// $sql_code="UPDATE estoque_toner SET preto = '$preto',amarelo = '$amarelo',ciano = '$ciano',magenta = '$magenta' WHERE ID = '$ID'";
// $query_clientes = $mysqli->query($sql_code) or die ($mysqli->error);

?>
