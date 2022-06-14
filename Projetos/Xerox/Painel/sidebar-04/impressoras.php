<?php 
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>XEROX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
<containner><br> 
    <?php
        if(isset($_SESSION['editar_impressora'])):
        ?>
            <?php include('html/template_editar.php'); ?>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['editar_impressora']);
        ?>

    <?php
        if(isset($_SESSION['cadastrar_impressora'])):
        ?>
            <?php include('html/template_cadastrar.php'); ?>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['cadastrar_impressora']);
        ?>

    <div>
     <?php
            if(isset($_SESSION['nome_vazio'])):
            ?>
        <div class="alert alert-danger" role="alert">
            Necessário preencher o campo "NOME".
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['nome_vazio']);
        ?>
    </div>
    <div>
     <?php
            if(isset($_SESSION['filial_vazio'])):
            ?>
        <div class="alert alert-danger" role="alert">
            Necessário preencher o campo "FILIAL".
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['filial_vazio']);
        ?>
    </div>

    <div>
     <?php
            if(isset($_SESSION['secao_vazio'])):
            ?>
        <div class="alert alert-danger" role="alert">
            Necessário preencher o campo "SEÇÃO".
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['secao_vazio']);
        ?>
    </div>

    <div>
     <?php
            if(isset($_SESSION['ip_vazio'])):
            ?>
        <div class="alert alert-danger" role="alert">
            Necessário preencher o campo "IP".
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['ip_vazio']);
        ?>
    </div>
    <div>
     <?php
            if(isset($_SESSION['impressora_cadastrada'])):
            ?>
        <div class="alert alert-success" role="alert">
            Impressora cadastrada com sucesso.
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['impressora_cadastrada']);
        ?>
    </div>
    <div>
     <?php
            if(isset($_SESSION['impressora_editada'])):
            ?>
        <div class="alert alert-success" role="alert">
            Impressora editada com sucesso.
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['impressora_editada']);
        ?>
    </div>


</containner>
<impressoras > 
    <?php foreach($lista_impressoras as $impressora): ?>  
        <section class="display_impressoras">
            <div class="row_impressoras">
                <div class="card_impressoras uso_impressoras">
                    <h2 class="titulos"><?php echo $impressora['filial']; ?></h2><hr>
                    <p><?php echo $impressora['nome']; ?></p>
                    <p><?php echo $impressora['secao']; ?></p>
                    <p><?php echo $impressora['modelo']; ?></p>
                    <a class="link_impressoras" href="//<?php echo $impressora['ip'];?>"><?php echo $impressora['ip']; ?></a><br>
                    <img class="image_impressoras" src="images/<?php echo $impressora['modelo']?>.jpg" alt="settings" />
                    <a href="Config/config_session.php?acao=editar& ID=<?php echo $impressora['ID']?> " id="" class="fa fa-cog"></a>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
    	
    <section class="display_impressoras">
        <a href="Config/config_session.php?acao=cadastrar">
            <div class="row_impressoras">
                <div class="card_impressoras2 uso_impressoras">

 
                  <br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </a>
           
        </section>
</impressoras>

</html>

<!-- <a href="painel.php?painel=impressoras& alterar=true& ID=<?php echo $impressora['ID']?> "><span class="fa fa-home mr-3"></span> Filiais</a>
                        <?php $teste=$_GET['alterar']; ?>
                        <?php echo $teste; ?> -->
