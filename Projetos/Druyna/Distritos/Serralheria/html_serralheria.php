<?php 
include ('../../config_session.php');
$validacao_tempo =  $bdo_finish_Carvao - $time;
 if($validacao_tempo < 0 && $bdo_status_Carvao == 'produzindo_01'){
   $sqla = "UPDATE usuario SET status_Carvao='finalizado_01' WHERE usuario='$user'";
   $conexao->query($sqla);
 }

?>

<div id="bg_serralheria"></div>
  <div class="box_serralheria">
  <img class="background_serralheria"  src="CSS/Imagens/ImagemCidade/Background/background_serralheria_v1.png"></a>
  <a href="cidade.php" class="close_serralheria"> X </a>

  <a id="box_display_lenhador"></a>
  <a id="display_lenhadores"><?php echo $bdo_lenhadores ?></a>
  <img class="icon_lenhador" src="CSS/Imagens/ImagemCidade/Background/icon_lenhador.png">

  <form method="GET" action="Distritos/Serralheria/config_Lenhador.php">
    <a class="box_alterar">ALTERAR</a>
    <input type="number" name="number_lenhadores" class="input_text_lenhador">
    <input type="submit"  class="submit_lenhador" value="CONFIRMAR"></input>
  </form>
   
  <img class="icon_madera_serralheria" src="CSS/Imagens/ImagemCidade/Background/icon_madera.png">
  <img class="icon_carvao_serralheria" src="CSS/Imagens/ImagemCidade/Background/icon_carvao.png">

  <a class="display_Madera_sec" ></a>
  <a class="display_carvao_sec" ><?php echo $bdo_carvao ?></a>

  <form method="POST">
    <input class="button_1_distritos" type="submit" name="opcao" value="CARVOARIA">
    <input class="button_2_distritos" type="submit" name="opcao" value="opcao2">
  </form>

  <?php
  if($_POST['opcao'] == 'CARVOARIA'):
  ?>
    <?php if($bdo_status_Carvao == 'livre'):
    ?>
    <div method="GET">
      <table class="table_serralheria">
         <tr>
             <th >---</th>
             <th id="thcolor">CARVÃO</th>
                <th ></th>
                <th >---</th>
                <th id="thcolor">MADERA</th>
                <th >---</th>
                <th id="thcolor">CARVOEIROS</th>
                <th >---</th>
                <th id="thcolor">TEMPO</th>
                <th >----</th>
                <th >-------------</th>
              </tr>
                <tr>
                <td></td>
                <td><?php echo $producao_carvao_01 ?> </td>
                <td> = </td>
                <th ></th>
                <td><?php echo $necessario_madera_carvao_01 ?> </td>
                <th ></th>
                <td><?php echo $carvoeiros_01 ?> </td>
                <th ></th>
                <td><?php echo $carvao_tempo_01?> seg.</td>
                <?php $submit_lenhadores = $bdo_lenhadores - $carvoeiros_01; ?>
                <th ></th>
                <form action="Distritos/Serralheria/producao_carvao.php" method="GET">
                  <input type="text" name="number_lenhadores" value="<?php echo $submit_lenhadores?>">
                  <input type="text" name="opcao" value="1">
                 <th ><button id="produzir_carvao" type="submit" >PRODUZIR</button>
                 
                </form>
              </tr>
              <tr>
                <td></td>
                <td><?php echo $producao_carvao_02 ?> </td>
                <td> = </td>
                <th ></th>
                <td><?php echo $necessario_madera_carvao_02 ?> </td>
                <th ></th>
                <td><?php echo $carvoeiros_02?> </td>
                <th ></th>
                <td><?php echo $carvao_tempo_02?> seg.</td>
                <th ></th>
                <form action="Distritos/Serralheria/producao_carvao.php" method="GET">
                 <th ><button id="produzir_carvao" name="opcao" type="submit" value="2">PRODUZIR</button>
                </form>
              </tr>
              <tr>
                <td></td>
                <td><?php echo $producao_carvao_03 ?> </td>
                <td> = </td>
                <th ></th>
                <td><?php echo $necessario_madera_carvao_03 ?> </td>
                <th ></th>
                <td><?php echo $carvoeiros_03 ?> </td>
                <th ></th>
                <td><?php echo $carvao_tempo_03?> seg.</td>
                <th ></th>
                <form action="Distritos/Serralheria/producao_carvao.php" method="GET">
                 <th ><button id="produzir_carvao" name="opcao" type="submit" value="3">PRODUZIR</button>
                </form>
              </tr>
              <tr>
                <td></td>
                <td><?php echo $producao_carvao_04 ?> </td>
                <td> = </td>
                <th ></th>
                <td><?php echo $necessario_madera_carvao_04 ?> </td>
                <th ></th>
                <td><?php echo $carvoeiros_04 ?> </td>
                <th ></th>
                <td><?php echo $carvao_tempo_04?> seg.</td>
                <th ></th>
                <form action="Distritos/Serralheria/producao_carvao.php" method="GET">
                 <th ><button id="produzir_carvao" name="opcao" type="submit" value="4">PRODUZIR</button>
                </form>
              </tr>
            </table>
    
    <div>
    <?php

    endif;
    ?>

    <?php if($bdo_status_Carvao == 'produzindo_01' || $bdo_status_Carvao == 'produzindo_02' || $bdo_status_Carvao == 'produzindo_03'):
        ?>
        <div class="box_produzindo_carvoeiro" > 

          <h1> 

          <h1 class="display_carvoeiros"><?php echo $bdo_carvoeiros ?></h1>
          <img class="icon_carvoeiro_produzindo" src="CSS/Imagens/ImagemCidade/Background/icon_carvoeiro.png"></img>
          <h1 class="tempo_restante_carvao">aaaa</h1>
          <h1 class="text_producao_carvao"> PRODUZINDO <?php if($bdo_status_Carvao == 'produzindo_01'){
             echo $producao_carvao_01; } ?> SACOS DE CARVÃO</h1>
        </div>
        <?php
        endif;
        ?>

    <?php if($bdo_status_Carvao == 'finalizado_01' || $bdo_status_Carvao == 'finalizado_02' || $bdo_status_Carvao == 'finalziado_03'):
        ?>
        <?php if($bdo_status_Carvao == 'finalizado_01'){
          $producao = $producao_carvao_01;
 
          
          
          
          // $producao_carvao_01 = 100;
          // $necessario_madera_carvao_01 = 60;
          // $carvao_tempo_01 = 60;
          // $carvoeiros_01 = 10;

        }
        ?>
  
        <div class="box_produzindo_carvoeiro" > 
          <form action="Distritos/Serralheria/producao_carvao.php">
            <button class="button_coletar_01" type="submit" name="coletar" value="1">COLETAR</button>
         </form>


          <h1 class="text_producao_carvao"> PRODUCÃO DE <?php echo $producao; ?> SACOS DE CARVÃO FINALIZADO</h1>
        </div>
        <?php
        endif;
        ?>



  <?php
  endif;
  if($_GET['opcao'] == 'opcao2'):
    ?>
      <div>
      <a class="text_error_cadastro">opcao2</a><br><br>
      <div>
  
    <?php
  
    endif;

  ?>

</div>