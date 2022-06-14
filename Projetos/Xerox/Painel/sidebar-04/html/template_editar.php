
<?php 
session_start();
include('../../../banco.php');
$ID = $_GET['ID'];

$sql_cliente = "SELECT * FROM impressoras WHERE ID=$ID";
$query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
$dados = $query_cliente->fetch_assoc();
$ID = $_GET['ID'];
?>

<html>
    <form class="form" action="Config/config_editar_impressora.php" method="POST"><br>
        <div class="box_form">
            <input id="invi" name="id" value="<?php echo $ID?>"><br>
        
            <div class="input-group input-group-sm mb-3">
                <div class="position">

                    <div class="input-group-prepend">

                        <div class="input-group-prepend">
                            <label class="input-group-text2" for="inputGroupSelect01">Filial
                        </div>

                        <select name="filial" class="custom-select" id="inputGroupSelect01">
                            <option  selected><?php echo $dados['filial']; ?></option>
                            <?php foreach($lista_filiais as $filial): ?>
                                <option ><?php echo $filial['nome']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div><br>
                    <div class="input-group-prepend">
                        <span class="input-group-text2" id="inputGroup-sizing-sm">Nome:</span>
                        <input name="nome" type="text" value="<?php echo $dados['nome'];?>" class="form-control1" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div><br>
                    
                    <div class="input-group-prepend">

                        <div class="input-group-prepend">
                            <label name="modelo" class="input-group-text2" for="inputGroupSelect01">Modelo
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
                        <input name="ip" value="<?php echo $dados['ip']; ?>" type="text" class="form-controlip" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div><br>
                    <div class="input-group-prepend">
                        <span class="input-group-text2" id="inputGroup-sizing-sm">Seção:</span>
                        <input name="secao" value="<?php echo $dados['secao']; ?>" type="text" class="form-control1" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div><br>
                    <div class="">
                        <button class="button_up">ALTERAR</button>
                    </div>
                </div>




                </div>
            </div>

        </div>
    </form>
</html>

