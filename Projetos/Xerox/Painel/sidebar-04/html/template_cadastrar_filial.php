
<?php 
session_start();
include('../../../banco.php');
?>

<html>
    <form class="form" action="Config/config_cadastrar_filial.php" method="POST"><br>
        <div class="box_form">
        <h1 class="titulos"></h1><br>
            <div class="input-group input-group-sm mb-3">
               <div class="position">
                    <div class="input-group-prepend">
                        <span class="input-group-text2" id="inputGroup-sizing-sm">Filial:</span>
                        <input name="nome" type="text" value="<?php echo $dados['nome'];?>" class="form-control1" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div><br>
                    <div>
                    <div class="input-group-prepend">
                        <span class="input-group-text2" id="inputGroup-sizing-sm">Tec.</span>
                        <input name="responsavel" value="<?php echo $dados['responsavel']; ?>" type="text" class="form-control1" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div><br>
                    <div class="input-group-prepend">
                        <span class="input-group-text2" id="inputGroup-sizing-sm">Ramal:</span>
                        <input name="ramal" value="<?php echo $dados['ramal']; ?>" type="text" class="form-control1" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div><br>
                    <div class="input-group-prepend">
                        <span class="input-group-text2" id="inputGroup-sizing-sm">Celular:</span>
                        <input name="celular" value="<?php echo $dados['celular']; ?>" type="text" class="form-control1" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div><br>
                    <div>
                        <button class="button_up">CADASTRAR</button>
                    </div>
                </div>

                </div>
            </div>

        </div>
    </form>
</html>

