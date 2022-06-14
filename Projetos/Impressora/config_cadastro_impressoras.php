<?php

include('banco.php');

$setor = $_GET['setor'];
$modelo = $_GET['modelo'];
$driver = $_GET['driver'];
$toner = $_GET['toner'];
$tipo_original = $_GET['tipo'];

$tipo_alterado="";
echo $tipo_original;

$tipo1=1;
$tipo2=2;

if($tipo_original == $tipo1){
    $tipo_alterado = 'Preto e Branco';
}elseif($tipo_original == $tipo2){
    $tipo_alterado = 'Colorido';
}else{
    $tipo_alterado = 'erro modelo toner';
}


echo $tipo_alterado;

$modelo_toner = $conn->query("SELECT * FROM cadastro_impressoras WHERE toner='$toner'");
$impressora = $conn->query("SELECT * FROM cadastro_impressoras WHERE modelo='$modelo'");

if(mysqli_num_rows($impressora) < 1){
    if(mysqli_num_rows($modelo_toner) > 0){
        $result_impressora = "INSERT INTO cadastro_impressoras (setor, modelo, driver, toner, tipo) values ('$setor', '$modelo', '$driver', '$toner', '$tipo_alterado' )";
        $result_impressora = mysqli_query($conn, $result_impressora);
        header('Location:cadastro_impressoras.php');
    }else{
        echo "impressora ja existe";
    }
    if(mysqli_num_rows($modelo_toner) < 1){
        $result_impressora = "INSERT INTO cadastro_impressoras (setor, modelo, driver, toner, tipo) values ('$setor', '$modelo', '$driver', '$toner', '$tipo_alterado' )";
        $result_toner = "INSERT INTO estoque_toner (modelo, preto, magenta, ciano, amarelo, tipo) values ('$toner','0','0','0','0', '$tipo_original')";
        $result_impressora = mysqli_query($conn, $result_impressora);
        $result_toner = mysqli_query($conn, $result_toner);
        echo "else";
        header('Location:cadastro_impressoras.php');
    }else{
        echo "Toner ja existe";
        header('Location:cadastro_impressoras.php');
    }
}else{
    echo "impressora ja existe";
    header('Location:cadastro_impressoras.php');
    
}


