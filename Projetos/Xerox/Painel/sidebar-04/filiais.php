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
<container><br> 
    <?php
        if(isset($_SESSION['editar_filial'])):
        ?>
            <?php include('html/template_editar_filial.php'); ?>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['editar_filial']);
        ?>

    <?php
        if(isset($_SESSION['cadastrar_filial'])):
        ?>
            <?php include('html/template_cadastrar_filial.php'); ?>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['cadastrar_filial']);
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
            if(isset($_SESSION['responsavel_vazio'])):
            ?>
        <div class="alert alert-danger" role="alert">
            Necessário preencher o campo "TEC.".
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['responsavel_vazio']);
        ?>
    </div>

    <div>
     <?php
            if(isset($_SESSION['ramal_vazio'])):
            ?>
        <div class="alert alert-danger" role="alert">
            Necessário preencher o campo "RAMAL".
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['ramal_vazio']);
        ?>
    </div>

    <div>
     <?php
            if(isset($_SESSION['celular_vazio'])):
            ?>
        <div class="alert alert-danger" role="alert">
            Necessário preencher o campo "CELULAR".
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['celular_vazio']);
        ?>
    </div>
    <div>
     <?php
            if(isset($_SESSION['filial_cadastrada'])):
            ?>
        <div class="alert alert-success" role="alert">
            Filial cadastrada com sucesso.
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['filial_cadastrada']);
        ?>
    </div>
    <div>
     <?php
            if(isset($_SESSION['filial_editada'])):
            ?>
        <div class="alert alert-success" role="alert">
            Filial editada com sucesso.
        </div>
        <?php
            endif;
            // Destroi uma session especifica, nesse caso destrui a 'usuario invalido'
            unset($_SESSION['filial_editada']);
        ?>
    </div>


</container>
<impressoras> 
    <?php foreach($lista_filiais as $filial): ?>  
        <section class="display_impressoras">
            <div class="row_impressoras">
                <div class="card_impressoras uso_impressoras">
                    <h2 class="titulos"><?php echo $filial['nome']; ?></h2><hr>
                    <p><?php echo $filial['responsavel']; ?></p>
                    <p><?php echo $filial['ramal']; ?></p>
                    <p><?php echo $filial['celular']; ?></p>
                    <a class="link_impressoras" href="//<?php echo $filial['ip'];?>"><?php echo $filial['ip']; ?></a><br>
                    <a href="Config/config_session.php?acao=editar_filial& ID=<?php echo $filial['ID']?> " id="" class="fa fa-cog"></a>
                </div>
            </div>
        </section>
    <?php endforeach; ?>	
    <section class="display_impressoras">
        <a href="Config/config_session.php?acao=cadastrar_filial">

        <div class="row_impressoras">
                <div class="card_impressoras2 uso_impressoras">

 
                  <br><br><br><br><br><br><br><br>
                </div>
            </div>
        </a>
           
        </section>
</impressoras>

</html>

<!-- <a href="painel.php?painel=impressoras& alterar=true& ID=<?php echo $impressora['ID']?> "><span class="fa fa-home mr-3"></span> Filiais</a>
                        <?php $teste=$_GET['alterar']; ?>
                        <?php echo $teste; ?> -->
