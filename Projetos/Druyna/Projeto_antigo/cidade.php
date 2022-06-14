<?php
session_start();
include('validacao_sessao.php');
?>

<!doctype html>
<html>
  <head>
    <link rel="stylesheet" type="text/CSS" href="CSS/style_City.css">
    <link rel="stylesheet" type="text/CSS" href="CSS/style_Mina.css">
    <link rel="stylesheet" type="text/CSS" href="CSS/style_Banco.css">
    <link rel="stylesheet" type="text/CSS" href="CSS/style_Armazem.css">
    <link rel="stylesheet" type="text/CSS" href="CSS/style_Mercado.css">
  </head>

  <body onLoad="initTime();">

 
        

    <containner class="container">
   

      <figure class="city_Block0_Camada0">

          <img class="Background" src="CSS/Imagens/ImagemCidade/Background/Background_1_v1.png">

          <div class="menu_lateral">
            <ul>
              <li><a class="menu_lateral1" href="#">Eventos</a></li>
              <li><a class="menu_lateral2" href="#">Eventos</a></li>
              <li><a class="menu_lateral3" href="#">Eventos</a></li>
              <li><a class="menu_lateral4" href="#">Eventos</a></li>
              <li><a class="menu_lateral5" href="#">Eventos</a></li>
            </ul>
          </div>

          <div class="text_logout">
            <ul>
              <a href="tempo.php" class="" aria-current="menu_lateral" >SAIR</a>
            </ul>
          </div>


          


          <img class="bandeira_giff1" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff2" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff3" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff4" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff5" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff6" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff7" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff8" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          <img class="bandeira_giff9" src="CSS/Imagens/ImagemCidade/Background/bandeira_giff.gif">
          
          <div name="text_laogout" class="horast" id="timer">b</div>
          
          <a class="text_usuario">Governador: <?php echo $_SESSION['usuario'];?> <a>
<!-- ----------------------------------------------------------------------------------------------------------------------- -->

          <a href="#bg_banco">
           <img class="icon_banco"  src="CSS/Imagens/ImagemCidade/Background/icon_banco.png"></a>

          <a href="#bg_mina"> 
            <img class="icon_mina"  src="CSS/Imagens/ImagemCidade/Background/icon_mina.png"></a>

          <a href="#bg_armazem"> 
            <img class="icon_armazem"  src="CSS/Imagens/ImagemCidade/Background/icon_armazem.png"></a>

          <a href="#bg_mercado"> 
            <img class="icon_mercado"  src="CSS/Imagens/ImagemCidade/Background/icon_mercado.png"></a>



<!-- ----------------------------------------------------------------------------------------------------------------------- -->
        <div id="bg_mina"></div>
          <div class="box_mina">
            <img class="background_mina" src="CSS/Imagens/ImagemCidade/Background/background_mina_v1.png">
             <a href="cidade.php" class="close_mina"> X </a>
          
             <div action="tempo.php" method="POST">
               <input name="teste" type="text" class="button_mina_temp">
                <button href="tempo.php" type="submit" class="button_mina_temp">ok</button>
            </div>
          </div>
<!-- -------------->
          <div id="bg_banco"></div>
            <div class="box_banco">
              <img class="background_banco"  src="CSS/Imagens/ImagemCidade/Background/background_banco_v1.png"></a>
              <a href="cidade.php" class="close_banco"> X </a>

               <div>
                <button id="button_banco_temp" class="button_banco_temp" type="submit">TEMP FERRO +150</button>
              </div>
           </div>
<!-- -------------->
           <div id="bg_armazem"></div>
            <div class="box_armazem">
              <img class="background_armazem"  src="CSS/Imagens/ImagemCidade/Background/background_armazem_v1.png"></a>
              <a href="cidade.php" class="close_armazem"> X </a>

               <div>
                <button id="button_armazem_temp" class="button_armazem_temp" type="submit">TEMP FERRO +150</button>
              </div>
           </div>
<!-- -------------->
          <div id="bg_mercado"></div>
            <div class="box_mercado">
              <img class="background_mecado"  src="CSS/Imagens/ImagemCidade/Background/background_mercado_v1.png"></a>
              <a href="cidade.php" class="close_mercado"> X </a>

               <div>
                <button id="button_mercado_temp" class="button_mercado_temp" type="submit">TEMP FERRO +150</button>
              </div>
           </div>
<!-- -------------->
      </figure>

    </containner>
  </body>
</html>


