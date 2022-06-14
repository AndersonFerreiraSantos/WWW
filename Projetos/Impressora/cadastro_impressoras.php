<?php 
include ('banco.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<link rel="stylesheet" type="text/CSS" href="style/style_impressoras.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro_impressoras</title>
</head>

<body>
    <a href="painel.php" class="logout"> VOLTAR </a>
    <form class="box_cadastro" action="config_cadastro_impressoras.php" class="box_cadastro_impressoras">
        <h1 class="titulos"> CADASTRAR IMPRESSORA </h1>
        <a class="c1">Setor:</a> <input name="setor" class="style_cadastro" size="23px" type="text"></input> <br><br>
        <a class="c2">Modelo:</a><input name="modelo" class="style_cadastro" size="23px" type="text"></input> <br><br>
        <a class="c3">Driver:</a><input name="driver" class="style_cadastro" size="23px" type="text"></input> <br><br>
        <a class="c4">Toner:</a><input name="toner" class="style_cadastro" size="23px" type="text"></input><br>
        <select class="toner" name="tipo">
            <option value=1 >Preto e Branco</option>
            <option value=2 >Colorido</option>
        </select>
        <br><br>
        
        <button class="ps"  type="submit">CONFIRMAR</button>
    </form>

    <table class="table_cadastro">
		<tr>
			<th class="imp">SETOR</th>
			<th class="imp">MODELO</th>
			<th class="imp">DRIVER</th>
			<th class="imp">MODELO TONER</th>
            <th class="imp">TIPO TONER</th>
            <th class="imp">CONFIGURAÇÃO</th>
		<tr>
		<?php foreach($lista_impressoras as $impressora): ?>
			<tr>
				<td class="imp"><?php echo $impressora['setor']; ?></td>		
				<td class="imp"><?php echo $impressora['modelo']; ?></td>
				<td class="imp"><?php echo $impressora['driver']; ?></td>
				<td class="imp"><?php echo $impressora['toner']; ?></td>
                <td class="imp"><?php echo $impressora['tipo']; ?></td>
				<td>
                    <a class="acao" href="editar.php?ID=<?php echo $impressora['ID'] ?> ">Editar</a> | 
				    <a class="acao" href="remover.php?ID=<?php echo $impressora['ID']; ?>">Remover</a>

				</td>
			</tr>
		<?php endforeach; ?>	
	<table>	
<?php $lista_impressoras =  buscar_impressoras($conn); ?>	
</body>

</html>
 
