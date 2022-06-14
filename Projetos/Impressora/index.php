<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="style/style_impressoras.css">
    <title>Documento</title>
</head>
<body>
    <form class="index" action="config_verificar.php" class=""  method="GET">
    <h1 class="titulos">BEM VINDO!</h1>

            <!-- Se o item 'usuário invalido' existir(item configurado no if de não autenticação do login). -->
        
        <?php
            if(isset($_SESSION['login_incorreto'])):
            ?>
            <div>
            <h1 class="login_invalido">LOGIN INVALIDO</h1><br><br>
            <div>
            <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['login_incorreto']);

            ?>
        <input name="usuario" class="cadastro_text" size="23" type="text" ><br><br>
        <input name="senha" class="cadastro_text" size="23"  type="password"><br><br>
        
        <button class="ps" type="submit" >CONFIRMAR</button><br><br>
        <a class="cadastrar" href="cadastro_usuario.php" type="submit" >CADASTRAR</a><br><br>
    </form>

</body>
</html>

