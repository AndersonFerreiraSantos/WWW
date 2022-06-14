<div id="bg_mina"></div>
            <div class="box_mina">

              <img class="background_mina" src="CSS/Imagens/ImagemCidade/Background/background_mina_v1.png">
              <a href="#" class="close_mina"> X </a>
              

              <div>
                <ul>
                  <?php
                  if($bdo_status_Mina == 3):
                ?>
                  
                  <!-- <li><a class="menu_lateral1" href="Config/config_Mina.php">Eventos</a></li> -->
                  
                  <box id="box_minero"></box>
                  
                  <a css="box_alterar_carvao" id="box_alterar_carvao">ALTERAR</a>

                  
                  <a id="box_alterar_mina">ALTERAR</a>

                  <img class="icon_mina_minero" src="CSS/Imagens/ImagemCidade/Background/icon_minero.png">
                  <a id="display_minero"><?php echo $bdo_minero ?></a>

                  <box class="background_color_mina">

                  <a>'<a>
                  
                  </box>
                  
                    <table class="table_mina_1">
                      <tr>
                        <th >---</th>
                        <th id="thcolor">FERRO</th>
                        <th ></th>
                        <th >---</th>
                        <th id="thcolor">CARVÃO</th>
                        <th >---</th>
                        <th id="thcolor">MINÉRIO</th>
                        <th >---</th>
                        <th id="thcolor">MINEROS</th>
                        <th >---</th>
                        <th id="thcolor">TEMPO</th>
                      </tr>
                      <tr>
                        <td></td>
                        <td><?php echo $producao_ferro_01 ?> Un. </td>
                        <td> = </td>
                        <th ></th>
                        <td><?php echo $ferro_carvao_01 ?> sacos </td>
                        <th ></th>
                        <td><?php echo $ferro_minerio_01?> sacos </td>
                        <th ></th>
                        <td><?php echo $ferro_mineros_01 ?> </td>
                        <th ></th>
                        <td><?php echo $ferro_tempo_01?> seg.</td>
                        <th ><a id="athcolor" href="Config/start_Mina_
                        
                        roberobertoO cara1.php">PORDUZIR</a></th>

                      </tr>
                      <tr>
                        <td></td>
                        <td><?php echo $producao_ferro_02 ?> Un. </td>
                        <td> = </td>
                        <th ></th>
                        <td><?php echo $ferro_carvao_02 ?> sacos </td>
                        <th ></th>
                        <td><?php echo $ferro_minerio_02?> sacos </td>
                        <th ></th>
                        <td><?php echo $ferro_mineros_02 ?> </td>
                        <th ></th>
                        <td><?php echo $ferro_tempo_02?> seg.</td>
                        <th ><ip id="athcolor" href="#">PORDUZIR</a></th>

                      </tr>
                      <tr>
                        <td></td>
                        <td><?php echo $producao_ferro_03 ?> Un. </td>
                        <td> = </td>
                        <th ></th>
                        <td><?php echo $ferro_carvao_03 ?> sacos </td>
                        <th ></th>
                        <td><?php echo $ferro_minerio_03?> sacos </td>
                        <th ></th>
                        <td><?php echo $ferro_mineros_03 ?> </td>
                        <th ></th>
                        <td><?php echo $ferro_tempo_03?> seg.</td>
                        <th ><a id="athcolor" href="#">PORDUZIR</a></th>

                      </tr>
                      <tr>
                        <td></td>
                        <td><?php echo $producao_ferro_04 ?> Un. </td>
                        <td> = </td>
                        <th ></th>
                        <td><?php echo $ferro_carvao_04 ?> sacos </td>
                        <th ></th>
                        <td><?php echo $ferro_minerio_04?> sacos </td>
                        <th ></th>
                        <td><?php echo $ferro_mineros_04 ?> </td>
                        <th ></th>
                        <td><?php echo $ferro_tempo_04?> seg.</td>
                        <th ><a id="athcolor" href="#">PORDUZIR</a></th>
                      </tr>
                    </table>
                    <?php if(isset($_SESSION['erro_quantidade_desempregado'])): ?>
                      <a class="erro_quantidade_mineros"> quantidade de desempregados <br>é insuficiente</a>
                    <?php endif;  unset($_SESSION['erro_quantidade_desempregado']); ?>
                    
                    <form method="GET" action="Config/start_Mina_1.php">
                      <button id="botao_mina_1" type="submit" name="botao_mina" value="1">PRODUZIR</button><br>
                      <button id="botao_mina_2" type="submit" name="botao_mina" value="2">PRODUZIR</button><br>
                      <button id="botao_mina_3" type="submit" name="botao_mina" value="3">PRODUZIR</button><br>
                      <button id="botao_mina_4" type="submit" name="botao_mina" value="4">PRODUZIR</button><br>
                    </form>

                    

                  </box> 
                    

                  <form method="GET" action="Config/config_Minero.php">
                    <input type="number" name="number_minero" class="valor_minero">
                    <input type="submit"  class="submit_minero" value="CONFIRMAR"></input>
                  </form>

                  

                               
                  <!-- <a class="text_producao_lingote">PRODUÇÃO DE LINGOTES DE FERRO</a>
                  <a id="mina_producao_1" href="Config/start_Mina_1.php"><?php echo $produção_ferro_01 ?> un.</a>
                  <img id="icon_ferro_un"  src="CSS/Imagens/ImagemCidade/Background/icon_ferro.png">
                  <a class="produzir_lingotes"> NECESSÁRIO <?php echo $producao_ferro_01?> LINGOTES DE FERRO </a> -->

                  <?php
                    endif;
                  // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
                  ?>

                </ul>

              </div>

              <?php
               if($bdo_status_Mina == 1):
              ?>
              <a href="Config/coleta_Mina_1.php" calss="imagens_mina">
                <img id="img_coleta_recursos_01"  src="CSS/Imagens/ImagemCidade/Mina/coleta_mina_01.png">
                <a class="coletar_lingotes"> COLETAR <?php echo $producao_ferro_01?> LINGOTES DE FERRO </a>
              <?php
              endif;
              ?>
              <?php
              if($bdo_status_Mina == 0):
              ?>
                <a calss="imagens_mina">
                <img id="icon_minerio"  src="CSS/Imagens/ImagemCidade/Background/icon_minerio.png">
                <img id="icon_produzindo_mina_01"  src="CSS/Imagens/ImagemCidade/Background/icon_produzindo.gif">
                <img id="icon_fornalha_mina_01"  src="CSS/Imagens/ImagemCidade/Background/icon_fornalha.png">
                <img id="icon_produzindo_mina_02"  src="CSS/Imagens/ImagemCidade/Background/icon_produzindo.gif">
                <img id="icon_ferro_mina"  src="CSS/Imagens/ImagemCidade/Background/icon_ferro.png">
                <a class="producao_ferro_01">PRODUZINDO <?php echo $producao_ferro_01?> LINGONTES DE FERRO</a>
              <?php
              endif;
              // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
              ?>

          </div>