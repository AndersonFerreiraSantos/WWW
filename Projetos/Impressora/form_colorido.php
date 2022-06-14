<link rel="stylesheet" type="text/CSS" href="style/style_impressoras.css">
<form class="box_entrada" action="config_entrada_unitaria_toner.php" method="GET">
<input class="invi" type="hidden" value="<?php echo $acao; ?>" name="acao"><br>     
    <a class="t1">TONER PRETO:</a> <input class="pc1" type="text" value="0" name="preto" ><br>
    <a class="t2">TONER AMARELO:</a>  <input class="pc2" type="text" value="0" name="amarelo" ><br>
    <a class="t3">TONER CIANO:</a>  <input class="pc3" type="text" value="0" name="ciano" ><br>
    <a class="t4">TONER MAGENTA:</a>  <input class="pc4" type="text" value="0" name="magenta" ><br>
    <input class="ps"type="submit" value="CONFIRMAR"></input>
    <input type="hidden" value="<?php echo $ID ?>" name="ID"><br>   
    <input type="hidden" value="<?php echo $acao ?>" name="acao"><br> 
</form>

