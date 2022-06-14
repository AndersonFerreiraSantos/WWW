<?php
session_start();
include('../../banco.php');

?>
<html>

teste
    <table class="table_cadastro">
		<tr>
			<th class="imp">MODELO</th>
		<tr>
		<?php foreach($lista_modelo_impressoras as $modelo_impressora): ?>
			<tr>
				<td class="imp"><?php echo $modelo_impressora['modelo']; ?></td>		
				<td>
                    <a class="acao" href="editar.php?ID=<?php echo $impressora['ID'] ?> ">Editar</a> | 
				    <a class="acao" href="remover.php?ID=<?php echo $impressora['ID']; ?>">Remover</a>

				</td>
			</tr>
		<?php endforeach; ?>	
	<table>	
<?php $lista_modelo_impressoras =  buscar_modelo_impressoras($mysqli); ?>	

</html>

<?php




?>
