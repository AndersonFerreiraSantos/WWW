<?php
session_start();
include('validacao_sessao.php');
include ('conexao.php');
include('config_session.php');


$teste = $bdo_finish_Mina * 1000;

$cronometro_teste=$bdo_finish_Mina - $time;



if($bdo_start_Carvao == ''){
  $sql = "UPDATE usuario SET start_Carvao='$time' WHERE usuario='$user'";
  $conexao->query($sql);
  echo time();
}


 if($bdo_status_Mina == 0 && $bdo_status_Mina != '')
    if($cronometro_teste < 0){
    $sql = "UPDATE usuario SET status_Mina='1' WHERE usuario='$user'";
    $conexao->query($sql);
 }

 $teste =$cronometro_teste;

?>

<!doctype html>
<html>
  <head>
    <link rel="stylesheet" type="text/CSS" href="CSS/style_City.css">

    <link rel="stylesheet" type="text/CSS" href="CSS/style_Mina.css">
    <link rel="stylesheet" type="text/CSS" href="CSS/style_Serralheria.css">
    <link rel="stylesheet" type="text/CSS" href="CSS/style_Armazem.css">
    <link rel="stylesheet" type="text/CSS" href="CSS/style_Mercado.css">

    <link rel="stylesheet" type="text/CSS" href="CSS/style_Pesquisa.css">
  </head>

  <body>
    <containner class="container">
      <figure class="city_Block0_Camada0">

          <img class="Background" src="CSS/Imagens/ImagemCidade/Background/Background_1_v1.png">


          <div class="temporizador_recursos">
            <ul>
                <?php
                  if($bdo_status_Mina == 0 || $bdo_status_Mina == 1 ):
                ?>
                  <li><a class="temporizador_Mina"></a></li>
                  <?php
                   if($bdo_status_Mina == 0):
                  ?>
                    <img class="teste_ampulheta" src="CSS/Imagens/ImagemCidade/Background/gif_ampulheta.gif">
                    <?php
                    endif;
                    // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
                    ?>

                <?php
                endif;
                  // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
                ?>

                <?php
                  if($bdo_status_Mina == 4):
                ?>

                 <li><a class="temporizador_Mina">Calculando</a></li>

                <?php
                  endif;
                ?>

                <?php
                  if($bdo_status_Mina == 4):
                ?>

                 <li><a class="temporizador_Mina">Calculando</a></li>

                <?php
                  endif;
                ?>

                <?php
                 if($bdo_status_Mina == 4):
                ?>

                 <li><a class="temporizador_Mina">Calculando</a></li>

                <?php
                 endif;
                ?>
            </ul>

          </div>




          <div class="text_logout">
            <ul>
              <a href="logout.php" class="text_logout" >SAIR</a>
            </ul>
          </div>


          <div class="menu_cidade">
            <ul>
              <a class="text_populacao_menu" ><?php echo "$bdo_populacao" ?></a>

              <a class="text_madera_menu" ><?php echo "$bdo_madera"  ?></a>
              <a class="text_pesquisa_menu" ><?php echo "$bdo_pesquisa" ?></a>
              <a class="text_minerio_menu" ><?php echo "$bdo_minerio" ?></a>
              <a class="text_trigo_menu" ><?php echo "$bdo_trigo" ?></a>
              <a class="text_uva_menu" ><?php echo "$bdo_uva" ?></a>
              <a class="text_ouro_menu" ><?php echo "$bdo_ouro" ?></a>

            </ul>
          </div>


          <img class="icon_populacao_menu" src="CSS/Imagens/ImagemCidade/Background/icon_populacao.png">
          <img class="icon_pesquisa_menu" src="CSS/Imagens/ImagemCidade/Background/icon_pesquisa.png">
          <img class="icon_minerio_menu" src="CSS/Imagens/ImagemCidade/Background/icon_minerio.png">
          <img class="icon_madera_menu" src="CSS/Imagens/ImagemCidade/Background/icon_madera.png">
          <img class="icon_trigo_menu" src="CSS/Imagens/ImagemCidade/Background/icon_trigo.png">
          <img class="icon_uva_menu" src="CSS/Imagens/ImagemCidade/Background/icon_uva.png">
          <img class="icon_ouro_menu" src="CSS/Imagens/ImagemCidade/Background/icon_ouro.png">


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

          <a class="text_usuario">Governador: <?php echo $_SESSION['usuario'];?><a>
          <a class="horario"> <a>
          <!-- ----------------------------------------------------------------------------------------------------------------------- -->



          <a href="#bg_mina">
            <img class="icon_mina"  src="CSS/Imagens/ImagemCidade/Background/icon_mina.png"></a>

          <a href="#bg_armazem">
            <img class="icon_armazem"  src="CSS/Imagens/ImagemCidade/Background/icon_armazem.png"></a>

          <a href="#bg_serralheria">
           <img class="icon_serralheria"  src="CSS/Imagens/ImagemCidade/Background/icon_serralheria.png"></a>

          <a href="#bg_mercado">
            <img class="icon_mercado"  src="CSS/Imagens/ImagemCidade/Background/icon_mercado.png"></a>

          <a href="#bg_pesquisa">
           <img class="icon_pesquisa"  src="CSS/Imagens/ImagemCidade/Background/icon_banco.png"></a>


          <?php include('Distritos/Serralheria/html_serralheria.php'); ?>

          <?php include('Distritos/Mina/html_Mina.php'); ?>



              <!-- ------MERCADO------------------------------------------------------------------------------------------------------------------------->
              


          <div id="bg_mercado"></div>
            <div class="box_mercado">
              <img class="background_mecado"  src="CSS/Imagens/ImagemCidade/Background/background_mercado_v1.png"></a>
              <a href="cidade.php" class="close_mercado"> X </a>

               <div>
                <button id="button_mercado_temp" class="button_mercado_temp" type="submit">TEMP FERRO +150</button>
              </div>
          </div>
                  <!-- -----PESQUISA----------------------------------------------------------------------------------------------------------------------->


          <div id="bg_pesquisa"></div>

          <div class="box_pesquisa">
            <div>


              <img class="background_pesquisa"  src="CSS/Imagens/ImagemCidade/Background/background_pesquisa_v1.png"></img>
              <a href="cidade.php" class="close_pesquisa"> X </a>

              <div class="box_cientista_box"></div>
              <a class="display_box_cientista_box"> 0 </a>


              <img class="icon_cientista_box" src="CSS/Imagens/ImagemCidade/Background/icon_cientista.png"></img>

              <a class="display_dados_produzido"> carregando</a>
              <a class="coletar_pesquisa" href="Config/coletar_pesquisa.php">COLETAR</a>

              <?php


              ?>
              <!---------------------------------------AREA DE TESTES---------------------------------------- -->
              <img class="icon_pesquisa_box" src="CSS/Imagens/ImagemCidade/Background/gif_dados cientificos.gif">
              <a class="contador" id="contador">
                <span class="next" onclick="nextNum()"></span>
                <span class="prev" onclick="prevNum()"></span>
                <div id="box">
                 <span></span>

                  <script>
                  var bdo_cientistas = <?php echo $bdo_cientistas ?>;
                  function nextNum(){
                    bdo_cientistas = bdo_cientistas + 1;
                    var alterar = document.querySelector(".display_box_cientista_box");
                    alterar.textContent = bdo_cientistas;
                  } 
                  function prevNum(){
                    bdo_cientistas = bdo_cientistas - 1;
                    var alterar = document.querySelector(".display_box_cientista_box");
                    alterar.textContent = bdo_cientistas;
                  }
                  var alterar = document.querySelector(".display_box_cientista_box");
                  alterar.textContent = bdo_cientistas;
                </script>
              </a>
              <form method="get" action="Config/config_Cientistas.php">
                <div class="valor_cientista">
                  ALTERAR:  <input name="number_cientista" type="number">
                </div>
                <input type="submit" value="CONFIRMAR" class="button_gravar_cientistas">

                <?php if(isset($_SESSION['erro_quantidade_cientistas'])): ?>
                 <a class="erro_quantidade_cientistas"> Quantidade de <br>cientistas é invalida</a>
                <?php endif;  unset($_SESSION['erro_quantidade_cientistas']); ?>
                <input type="submit" value="CONFIRMAR" class="button_gravar_cientistas">

                <?php if(isset($_SESSION['erro_quantidade_desempregado'])): ?>
                 <a class="erro_quantidade_cientistas"> quantidade de desempregados <br>é insuficiente</a>
                <?php endif;  unset($_SESSION['erro_quantidade_desempregado']); ?>
              </form>
              <!---------------------------------------FINAL AREA DE TESTES---------------------------------------- -->
          </div>

      </figure>
    </containner>
    <?php include('JS/recursos_primarios.php'); ?>
  </body>
</html>


