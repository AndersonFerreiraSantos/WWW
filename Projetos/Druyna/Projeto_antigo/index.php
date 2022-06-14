<?php
session_start();
?>
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="CSS/style_Index.css">
    
    <title>DUTRAN</title>

  </head>

  <body>

    <container class="container">  

      <img class="background" src="CSS/Imagens/login/background_login_v1.jpg">
      
      <navbar class="navbar_itens">

        <a class="navbar_item1" aria-current="page" href="cadastro.php" >CADASTRAR</a>
        <a class="navbar_item2" aria-current="page" href="#" >PACH</a>

      </navbar>

    </container>
      
    <form action="autenticacao_login.php" class="login"  method="POST">
        <h1 class="login_text">LOGIN</h1>

        <!-- Se o item 'usuário invalido' existir(item configurado no if de não autenticação do login). -->
            <?php
            if(isset($_SESSION['login_invalido'])):
            ?>
            <div>
            <a class="text_error_login">Usuário ou senha inválidos</a><br><br>
            <div>
            <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['login_invalido']);
            ?>
        <input name="usuario" class="user_text"  type="text" placeholder="Usuario"><br><br>
        <input name="senha" size="21" class="user_text" type="password" placeholder="Senha"><br><br>
        <button type="submit">ENTRAR</button><br><br>
</form>
</body>
<html>