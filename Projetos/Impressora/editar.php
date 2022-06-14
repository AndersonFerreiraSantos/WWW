
<?php 
session_start();
include ('banco.php');

$mysqli = new mysqli($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if($mysqli->connect_errno){
 	die("Falha");
}

$ID = intval($_GET['ID']);

$sql_cliente = "SELECT * FROM cadastro_impressoras WHERE ID = '$ID'";
$query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
$impressora = $query_cliente->fetch_assoc();



?>
 <a href="cadastro_impressoras.php" class="logout"> VOLTAR </a>
<link rel="stylesheet" type="text/CSS" href="style/style_impressoras.css">
<h1 class="titulos"> EDITAR IMPRESSORA <?php echo $impressora['modelo'] ?> </h1> <br>
<link rel="stylesheet" type="text/CSS" href="style/style_impressoras.css">

	<form class="box_entrada" action="gravar.php" method="GET">

	<input class="invi" type="hidden" value="<?php echo $acao; ?>" name="acao"><br>    

		<a class="t1">SETOR:</a> <input class="pk1" type="text" value="<?php echo $impressora['setor']; ?>" name="setor" ><br>
		<a class="t2">IMPRESSORA: </a>  <input class="pk2" type="text" value="<?php echo $impressora['setor']; ?>" name="modelo" ><br>
		<a class="t3">DRIVER: </a>  <input class="pk3" type="text" value="<?php echo $impressora['setor']; ?>" name="driver" ><br>
		<a class="t4">TONER:</a>  <input class="pk4" type="text" value="<?php echo $impressora['setor']; ?>" name="toner" ><br>
		<select class="toner_edit" name="tipo">
            <option value=1 >Preto e Branco</option>
            <option value=2 >Colorido</option>
        </select>
		<input class="pks"type="submit" value="CONFIRMAR"></input>
		<input type="hidden" value="<?php echo $ID ?>" name="ID"><br>   
		<input type="hidden" value="<?php echo $acao ?>" name="acao"><br> 
	</form>



<!-- <form action="gravar.php">
		<fieldset >
			<legend>Alterar informações da impressora: <?php echo $impressora['modelo'] ?>  </legend>
			ID:<br> <input type="text" name="ID" value="<?php echo $ID ?>" /><br><hr>
			<label>Setor da instalação:<br>
				<input type="text" name="setor" value="<?php echo $impressora['setor'] ?>"  /><br><hr>
			</label>
			<label>Modelo da impressora:<br>
				<input type="text" name="modelo" value="<?php echo $impressora['modelo'] ?>" /><br><hr>
			</label>
			<label>Driver:<br>
				<input type="text" name="driver" value="<?php echo $impressora['driver'] ?>" /><br><hr>
			</label>
			<label>Modelo do toner:<br>
				<input type="text" name="toner" value="<?php echo $impressora['toner'] ?>"/><br><hr>
			</label>
			<input type="submit" value="EDITAR" />
		</fieldset>
	</form> -->

<?php 

?>