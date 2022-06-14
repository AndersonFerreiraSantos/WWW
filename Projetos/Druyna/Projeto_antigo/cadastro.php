<?php
session_start();
?>
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="CSS/style_Cadastro.css">
    
    <title>DUTRAN</title>

  </head>

  <body>

    <container class="container">  

      <img class="background" src="CSS/Imagens/login/background_registro_v1.jpg">
      
      <a class="navbar_item1" aria-current="page" href="index.php">RETORNAR</a>
        
      </navbar>

    </container>
    <form action="conexao_cadastro.php" class="cadastro"  method="POST">
        <h1 class="cadastrar_text">CADASTRAR</h1>

        <!-- Se o item 'usuário invalido' existir(item configurado no if de não autenticação do login). -->
        <?php
            if(isset($_SESSION['usuario_existe'])):
            ?>
            <div>
            <a class="text_error_cadastro">Usuário/email já utilizado</a><br><br>
            <div>
            <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['usuario_existe']);

            ?>
            <?php
            if(isset($_SESSION['status_cadastro'])):
            ?>
            <div>
            <a class="text_success_cadastro">Cadastro realizado</a><br><br>
            <div>
            <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['status_cadastro']);
            ?>
    
        <input name="email" class="cadastro_text" size="23" type="email" placeholder="e-mail"><br><br>
        <input name="nome" class="cadastro_text" size="23"  type="text" placeholder="Nome"><br><br>
        <input name="usuario" class="cadastro_text" size="23"  type="text" placeholder="Usuario"><br><br>
        <input name="senha" class="cadastro_text" size="24"  type="password" placeholder="Senha"><br><br>
        <button type="submit" >CONFIRMAR</button><br><br>
    </form>

</body>
<html>

