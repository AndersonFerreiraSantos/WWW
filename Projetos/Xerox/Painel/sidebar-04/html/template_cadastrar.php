
<?php 
session_start();
include('../../../banco.php');
?>

<html>
    <form class="form" action="Config/config_cadastrar_impressora.php" method="POST"><br>
        <div class="box_form">
        <h1 class="titulos"></h1><br>
            <div class="input-group input-group-sm mb-3">
                <div class="position">

                    <div class="input-group-prepend">

                        <div class="input-group-prepend">
                            <label class="input-group-text2" for="inputGroupSelect01">Filial
                        </div>

                        <select name="filial" class="custom-select" id="inputGroupSelect01">
                            <?php foreach($lista_filiais as $filial): ?>  
                                <option><?php echo $filial['nome']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div><br>
                    <div class="input-group-prepend">
                        <span class="input-group-text2" id="inputGroup-sizing-sm">Nome:</span>
                        <input name="nome" type="text" value="" class="form-control1" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div><br>
                    
                    <div class="input-group-prepend">

                        <div class="input-group-prepend">
                            <label class="input-group-text2" for="inputGroupSelect01">Modelo
                        </div>
                        <select name="modelo" class="custom-select" id="inputGroupSelect01">
                            <?php foreach($lista_modelo_impressoras as $impressora): ?>  
                                <option><?php echo $impressora['modelo']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div><br>
                    <div>
                    <div class="input-group-prepend">
                        <span class="input-group-text2" id="inputGroup-sizing-sm">IP:</span>
                        <input name="ip"value="" type="text" class="form-controlip" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div><br>
                    <div class="input-group-prepend">
                        <span class="input-group-text2" id="inputGroup-sizing-sm">Seção:</span>
                        <input name="secao" value="" type="text" class="form-control1" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div><br>
                    <div class="">
                        <button class="button_up">CADASTRAR</button>
                    </div>
                </div>




                </div>
            </div>

        </div>
    </form>
</html>

