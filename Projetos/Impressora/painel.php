<?php 
session_start();
include('banco.php');
include ('config_validacao_sessao.php');

$session = $_SESSION['usuario'];

$sql_session_user = "SELECT * FROM impressoras WHERE usuario = '$session'";
$query_session_user = $mysqli->query($sql_session_user) or die($mysqli->error);
$session_user = $query_session_user->fetch_assoc(); 


?>

<!DOCTYPE html>
<html lang="pt-br">

<link rel="stylesheet" type="text/CSS" href="style/style_impressoras.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro_toner</title>
</head>

<body>

 <a class="logout" href="logout.php"> SAIR </a> <h1 class="usuario">BEM VINDO! <?php echo $_SESSION['usuario']; ?>. </h1> 
    <form class="">        
        <a class="button" id="button_1" href="cadastro_impressoras.php"> IMPRESSORA </a>
        <a class="button" id="button_2" href="cadastro_toner.php" > ENTRADA DE MATERIAIS </a>
		<?php if($session_user['nivel'] == 2 ){ include('administrador.php'); } ?>
        

    </form>
<form class="table_1_painel">

<h1 class="titulos"> TONERS PRETO E BRANCO </h1>
    <table> 
		<tr>
			<th>MODELO</th>
			<th>QUANTIDADE</th>

		<tr>
		<?php foreach($lista_toners_preto as $toner): ?>
			<tr>
                <td><?php echo $toner['modelo']; ?></td>			
			<td>
				<a> <?php echo $toner['preto']; ?></a> 

			</td>

			</tr>
		<?php endforeach; ?>	
	<table>	

    
    <h1 class="titulos"> TONERS COLORIDO </h1>
    <table> 
		<tr>
			<th>MODELO</th>
            
			<th>PRETO</th>
            <th>CIANO</th>
			<th>AMARELO</th>
            <th>MAGENTA</th>

		<tr>
		<?php foreach($lista_toners_colorido as $toner_colorido): ?>
			<tr>
				<td ><?php echo $toner_colorido['modelo']; ?></td>
				 <td class="preto"><?php echo $toner_colorido['preto']; ?></a>
                 <td class="ciano"><?php echo $toner_colorido['ciano']; ?></a>
                 <td class="amarelo"><?php echo $toner_colorido['amarelo']; ?></a>
                 <td class="magenta"><?php echo $toner_colorido['magenta']; ?></a>

			</td>
			</tr>
		<?php endforeach; ?>	
	<table>	
</form>
</body>

</html>




