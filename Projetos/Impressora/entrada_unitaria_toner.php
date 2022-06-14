
<a href="cadastro_toner.php" class="logout"> VOLTAR </a>
<h1 class="titulos"> <?php if($_GET['acao'] == 2){echo "SAÍDA ";}else{ echo "ENTRADA ";}  ?>DE TONER </h1>
<?php

include('banco.php');

$ID=$_GET['ID'];
$acao=$_GET['acao'];

$sql_ID = "SELECT * FROM estoque_toner WHERE ID = '$ID'";
$query_ID = $mysqli->query($sql_ID) or die($mysqli->error);
$BD_ID = $query_ID->fetch_assoc();

if($BD_ID['tipo'] == 1){
    include('form_preto_e_branco.php');

}elseif($BD_ID['tipo'] == 2){
    include('form_colorido.php');

}else{
    echo "erro";
}

// $sql_code="UPDATE cadastro_impressoras SET setor = '$setor',modelo = '$modelo',driver = '$driver',toner = '$toner' WHERE ID = '$ID'";

?>


