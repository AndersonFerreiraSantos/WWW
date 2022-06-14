

<?php 
session_start();
include('../../../banco.php');
$ID = $_GET['ID'];


$sql_cliente = "SELECT * FROM filiais WHERE ID=$ID";
$query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
$dados = $query_cliente->fetch_assoc();
$ID = $_GET['ID'];
?>

<html>
    <form class="form" action="Config/config_editar_filial.php" method="POST"><br>
        <div class="box_form">
            <input id="invi" name="id" value="<?php echo $ID?>"><br>
        
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
                        <button class="button_up">ALTERAR</button>
                    </div>
                </div>




                </div>
            </div>

        </div>
    </form>
</html>

