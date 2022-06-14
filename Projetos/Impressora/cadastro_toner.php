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
    <title>Cadastro_toner</title>
</head>

<body>
    <a href="painel.php" class="logout"> VOLTAR </a>
    <h1 class="titulos">ESTOQUE DE TONER</h1>

    <table> 
		<tr>
			<th>MODELO</th>
			<th>TIPO</th>
            <th>ULTIMA ENTRADA</th>
			<th>AÇÃO</th>
            <th>ULTIMA SAÍDA</th>

		<tr>
		<?php foreach($lista_toners as $toner): ?>
			<tr>
				<td><?php echo $toner['modelo']; ?></td>
                <td><?php if ($toner['tipo'] ==1){ echo 'Preto e Branco';}elseif($toner['tipo'] ==2){ echo 'Colorido';}else{ echo 'erro';} ?></td>			

                <td><a> <?php echo $toner['data_entrada']; ?></a> 
			<td>
				<a class="acao" href="entrada_unitaria_toner.php?ID=<?php echo $toner['ID'] ?>& acao=1 ">ENTRADA</a> | 
				<a class="acao" href="entrada_unitaria_toner.php?ID=<?php echo $toner['ID']  ?>& acao=2 ">SAÍDA</a>  
                
			</td>
                 <td><a> <?php echo $toner['data_saida']; ?></a> 
			</tr>
		<?php endforeach; ?>	
	<table>	


    <!-- <form action="config_entrada_toner.php">
        <table>
            <h1> CADASTRO DE TONER </h1>
            <tr>
                <th class="imp">ID</th>
                <th class="imp">MODELO</th>
                <th class="imp">PRETO</th>
                <th class="imp">ENTRADA</th>
                <th class="imp">MAGENTA </th>
                <th class="imp">ENTRADA</th>
                <th class="imp">CIANO</th>
                <th class="imp">ENTRADA</th>
                <th class="imp">AMARELO</th>
                <th class="imp">ENTRADA</th>
            <tr>
            <?php foreach($lista_toners as $toner): ?>
                <tr>		
                     <td class="imp"><input name="ID" type="number" value="<?php echo $toner['ID']; ?>" size="1"> </td>
                    <td class="imp"><?php echo $toner['modelo']; ?></td>
                    <td class="imp" method="POST"><?php echo $toner['preto']; ?>  </td> 
                    <td class="imp"><input class="input_preto" type="number" name="entrada_preto" size="8" value="0" > </td>
                    <td class="imp"><?php echo $toner['magenta']; ?></td>
                    <td class="imp"><input class="input_magenta" type="number" name="entrada_magenta" size="8" value="0" > </td>
                    <td class="imp"><?php echo $toner['ciano']; ?></td>
                    <td class="imp"><input class="input_ciano" type="number" name="entrada_ciano" size="8" value="0" > </td>
                    <td class="imp"><?php echo $toner['amarelo']; ?></td>
                    <td class="imp"><input class="input_amarelo" type="number" name="entrada_amarelo" size="8" value="0" > </td>
                    <td>
                        <button type="submit" href="config_cadastro_toners.php?ID=<?php echo $toner['ID']; ?>">Editar</a> | 
                        <a href="remover.php?ID=<?php echo $toner['ID']; ?>">Remover</a>
                    </td>
                </tr>
            <?php endforeach; ?>	
        <table>	
	
    </form> -->
</body>

</html>

