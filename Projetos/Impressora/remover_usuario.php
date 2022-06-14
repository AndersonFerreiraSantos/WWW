<?php
include ('banco.php');

$ID = intval($_GET['ID']);

$sql_code="DELETE FROM impressoras WHERE ID = '$ID'";

$sql_query = $mysqli->query($sql_code);

header('Location:painel_admin.php');

?>