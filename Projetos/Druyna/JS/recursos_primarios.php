<?php include('../config_session.php'); 

?>

<script>
  //-----------------------------------------------------------------------------TEMPORIZADOR-PESQUISA--------------------------------------------------------------------------------------
  function temporizador_pesquisa() {
    var data = new Date();
    var data_js = parseInt(data.getTime());

    var start_recurso = <?php echo $bdo_start_Pesquisa ?>;
    var trabalhadores = <?php echo $bdo_cientistas ?>;
    var modificador = <?php echo $modificador_pesquisa ?>;
    var recursos = <?php echo $bdo_pesquisa ?>;

    //exemplificado 'E1 OBS: E1 está em rascunhos final da pagina'
    var calculo =  Math.trunc((((Math.trunc((data_js - (parseInt(start_recurso) * 1000))/1000)) * modificador) * trabalhadores) + recursos);

    var selector = document.querySelector(".text_pesquisa_menu");
    selector.textContent = calculo;
  }
  temporizador_pesquisa();
  setInterval(temporizador_pesquisa, 1000);
//-----------------------------------------------------------------------------TEMPORIZADOR-MADERA--------------------------------------------------------------------------------------
function temporizador_madera() {
    var data = new Date();
    var data_js = parseInt(data.getTime());

    var start_recurso = <?php echo $bdo_start_Madera ?>;
    var trabalhadores = <?php echo $bdo_lenhadores ?>;
    var modificador = <?php echo $modificador_madera ?>;
    var recursos = <?php echo $bdo_madera ?>;
    //exemplificado 'E1 OBS: E1 está em rascunhos final da pagina'
    var calculo =  Math.trunc((((Math.trunc((data_js - (parseInt(start_recurso) * 1000))/1000)) * modificador) * trabalhadores) + recursos);

    var selector1 = document.querySelector(".text_madera_menu");
    var selector2 = document.querySelector(".display_Madera_sec");
    selector1.textContent = calculo;
    selector2.textContent = calculo;
  }
  temporizador_madera();
  setInterval(temporizador_madera, 1000);
  //-----------------------------------------------------------------------------TEMPORIZADOR-MINERIO--------------------------------------------------------------------------------------
function temporizador_minerio() {
    var data = new Date();
    var data_js = parseInt(data.getTime());

    var start_recurso = <?php echo $bdo_start_Minerio ?>;
    var trabalhadores = <?php echo $bdo_mineros ?>;
    var modificador = <?php echo $modificador_minerio ?>;
    var recursos = <?php echo $bdo_minerio ?>;
    //exemplificado 'E1 OBS: E1 está em rascunhos final da pagina'
    var calculo =  Math.trunc((((Math.trunc((data_js - (parseInt(start_recurso) * 1000))/1000)) * modificador) * trabalhadores) + recursos);

    var selector = document.querySelector(".text_minerio_menu");
    selector.textContent = calculo;
  }
  temporizador_minerio();
  setInterval(temporizador_minerio, 1000);
    //-----------------------------------------------------------------------------TEMPORIZADOR-TRIGO--------------------------------------------------------------------------------------
function temporizador_trigo () {
    var data = new Date();
    var data_js = parseInt(data.getTime());

    var start_recurso = <?php echo $bdo_start_Trigo ?>;
    var trabalhadores = <?php echo $bdo_fazenderos ?>;
    var modificador = <?php echo $modificador_trigo ?>;
    var recursos = <?php echo $bdo_trigo ?>;
    //exemplificado 'E1 OBS: E1 está em rascunhos final da pagina'
    var calculo =  Math.trunc((((Math.trunc((data_js - (parseInt(start_recurso) * 1000))/1000)) * modificador) * trabalhadores) + recursos);

    var selector = document.querySelector(".text_trigo_menu");
    selector.textContent = calculo;
  }
  temporizador_trigo();
  setInterval(temporizador_trigo, 1000);
    //-----------------------------------------------------------------------------TEMPORIZADOR-UVA--------------------------------------------------------------------------------------
    function temporizador_uva () {
    var data = new Date();
    var data_js = parseInt(data.getTime());

    var start_recurso = <?php echo $bdo_start_Uva ?>;
    var trabalhadores = <?php echo $bdo_viticultores ?>;
    var modificador = <?php echo $modificador_uva ?>;
    var recursos = <?php echo $bdo_uva ?>;
    //exemplificado 'E1 OBS: E1 está em rascunhos final da pagina'
    var calculo =  Math.trunc((((Math.trunc((data_js - (parseInt(start_recurso) * 1000))/1000)) * modificador) * trabalhadores) + recursos);

    var selector = document.querySelector(".text_uva_menu");
    selector.textContent = calculo;
  }
  temporizador_uva();
  setInterval(temporizador_uva, 1000);

      //-----------------------------------------------------------------------------TEMPORIZADOR-OURO--------------------------------------------------------------------------------------
      function temporizador_ouro () {
    var data = new Date();
    var data_js = parseInt(data.getTime());

    var start_recurso = <?php echo $bdo_start_Ouro ?>;
    var trabalhadores = <?php echo $bdo_banqueros ?>;
    var modificador = <?php echo $modificador_ouro ?>;
    var recursos = <?php echo $bdo_ouro ?>;
    //exemplificado 'E1 OBS: E1 está em rascunhos final da pagina'
    var calculo =  Math.trunc((((Math.trunc((data_js - (parseInt(start_recurso) * 1000))/1000)) * modificador) * trabalhadores) + recursos);

    var selector = document.querySelector(".text_ouro_menu");
    selector.textContent = calculo;
  }
  temporizador_ouro();
  setInterval(temporizador_ouro, 1000);

  temporizador_uva();
  setInterval(temporizador_uva, 1000);

      //-----------------------------------------------------------------------------TEMPORIZADOR-OURO--------------------------------------------------------------------------------------
  function tempo_restante_carvao () {
    var data = new Date();
    var data_js = parseInt(data.getTime());

    var finish_time = 1000 *(<?php echo $bdo_finish_Carvao ?>);

    var calculo = parseInt((finish_time - data_js)/1000);

    if(calculo < 0){
      calculo = 'PRONTO';
    }
   
    var selector = document.querySelector(".tempo_restante_carvao");
    selector.textContent = calculo;
  }
  tempo_restante_carvao();
  setInterval(tempo_restante_carvao, 1000);

 // setInterval(data_cidade, 1000);
  // var comparativo_status_Mina = <?php echo $bdo_status_Mina ?>;

  // if (comparativo_status_Mina != 3){
  //     function temporizador_mina (){
  //     var data = new Date();
  //     var data_milissegundos =data.getTime();
  //     var data_js = parseInt(data_milissegundos);

  //     //----------------------------- Temporizador Mina  --------------
  //     var bdo_finish_Mina = <?php echo $bdo_finish_Mina ?>;
  //     var bdo_finish_Mina_milissegundos = bdo_finish_Mina * 1000;
  //     var tempo_restante = data_milissegundos - bdo_finish_Mina_milissegundos;
  //     var tempo_restante_int = parseInt((tempo_restante * -1) /1000);
  //     var tempo_restante_teste = parseInt((tempo_restante * -1) /1000);

  //     if (tempo_restante_int < 0){
  //       tempo_restante_int = 'Pronto';
  //     }
  //     //-----------------------------------------------------------------------

  //     var alterar2 = document.querySelector(".temporizador_Mina");
  //     alterar2.textContent = tempo_restante_int;
  //   }
  // setInterval(temporizador_mina, 1000);
  // temporizador_mina();
  // }


  // function data_cidade(){
  //   var data = new Date();
  //   var data_display =("Data:  " + data.getFullYear() + "/0" +  data.getMonth() + "/" + data.getDay() + " - "  + data.getHours() + ":" + data.getMinutes() + ":" + data.getSeconds());
  //   var alterar2 = document.querySelector(".horario");
  //   alterar2.textContent = data_display;
  // }
  // data_cidade();

  // function temporizador_pesquisa() {
  //   var data = new Date();
  //   var data_milissegundos =data.getTime();
  //   var data_js = parseInt(data_milissegundos);

  //   //-----------------------------Temporizador coleta de dados---------------
  //   var bdo_tempo_inicio_pesquisa = <?php echo $bdo_tempo_inicio_pesquisa ?>;
  //   var bdo_populacao = <?php echo $bdo_cientistas ?>;
  //   var quantidade_pesquisa_segundo = 0.1;

  //   var bdo_tempo_inicio_pesquisa_convert =  parseInt(bdo_tempo_inicio_pesquisa) * 1000;
  //   var tempo_corrido = data_js - bdo_tempo_inicio_pesquisa_convert;

  //   var tempo_corrido_sg = tempo_corrido/1000;

  //   var tempo_corrido_sg_int = Math.trunc(tempo_corrido_sg);

  //   var total_pesquisa_tempo = (tempo_corrido_sg_int * quantidade_pesquisa_segundo) * bdo_populacao;

  //   var total_pesquisa_tempo_int =  Math.trunc(total_pesquisa_tempo);
  //   //-----------------------------------------------------------------------

  //   var alterar1 = document.querySelector(".display_dados_produzido");
  //   alterar1.textContent = total_pesquisa_tempo_int;

  //   console.log('1 segundo se passou teste');
  // }

  // temporizador_pesquisa();
  // setInterval(data_cidade, 1000);
  // setInterval(temporizador_pesquisa, 1000);



//RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS-RASCUNHOS


//E1--------------E1----------------E1
  // function temporizador_madera() {
  //   var data = new Date();
  //   var data_js = parseInt(data.getTime());

  //   var start_recurso = <?php echo $bdo_start_Madera ?>;
  //   var trabalhadores = <?php echo $bdo_lenhadores ?>;
  //   var modificador = <?php echo $modificador_madera ?>;
  //   var recursos = <?php echo $bdo_madera ?>;

  //   var bdo_tempo_inicio_pesquisa_convert =  parseInt(start_recurso) * 1000;
  //   var tempo_corrido = data_js - bdo_tempo_inicio_pesquisa_convert;

  //   var tempo_corrido_sg = tempo_corrido/1000;

  //   var tempo_corrido_sg_int = Math.trunc(tempo_corrido_sg);

  //   var total_pesquisa_tempo = ((tempo_corrido_sg_int * modificador) * trabalhadores) + recursos;

  //   var total_pesquisa_tempo_int =  Math.trunc(total_pesquisa_tempo);
  //   //-----------------------------------------------------------------------

  //   var alterar1 = document.querySelector(".display_Madera_sec");
  //   var alterar2 = document.querySelector(".text_madera_menu");
  //   alterar1.textContent = total_pesquisa_tempo_int;
  //   alterar2.textContent = total_pesquisa_tempo_int;

  //   console.log('31 segundo se passou teste');
  // }
  // temporizador_madera();
  // setInterval(temporizador_madera, 1000);
</script>