<?php
session_start();
include("banco.php");
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
    
    <a href="painel.php" class="logout"> VOLTAR </a><br><br><h1 class="usuario">Usuário: <?php echo $_SESSION['usuario']; ?> </h1>
    

    <h1 class="titulos"> PAINEL ADMINISTRATIVO </h1>

    <table>
		<tr>
			<th class="imp">USUARIOS</th>
			<th class="imp">NIVEL</th>
			<th class="imp">CONFIGURAÇÕES</th>
		<tr>
		<?php foreach($lista_usuarios as $usuario): ?>
			<tr>
				<td class="imp"><?php echo $usuario['usuario']; ?></td>		
				<td class="imp"><?php if($usuario['nivel'] == 1){echo 'Administrador';}else{echo 'Usuario';}; ?></td>

				<td> 
				    <a class="acao" href="remover_usuario.php?ID=<?php echo $usuario['ID']; ?>">Remover</a>

				</td>
			</tr>
		<?php endforeach; ?>	
	<table>	
<?php $lista_usuarios =  buscar_usuarios($conn); ?>	
</body>

</html>
 
