<?php
include ('banco.php');

$ID = intval($_GET['ID']);

$sql_code="DELETE FROM cadastro_impressoras WHERE ID = '$ID'";

$sql_query = $mysqli->query($sql_code);

header('Location:cadastro_impressoras.php');

?>