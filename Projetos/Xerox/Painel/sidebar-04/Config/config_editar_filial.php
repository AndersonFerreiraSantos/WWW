
<?php 
session_start();
include('../../../banco.php');

$ID = $_POST['id'];

$nome=$_POST['nome'];
$responsavel=$_POST['responsavel'];
$ramal=$_POST['ramal'];
$celular=$_POST['celular'];


if($nome == ''){
    $_SESSION['nome_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}
if($resposanvel == ''){
    $_SESSION['modelo_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}
if($ramal == ''){
    $_SESSION['filial_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}
if($celular == ''){
    $_SESSION['secao_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}


if($nome != '' && $responsavel != '' && $ramal != '' && $celular != ''){
    $sql_cliente = "SELECT * FROM filiais";
    $query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
    $cliente = $query_cliente->fetch_assoc();

    $sql_code="UPDATE filiais SET nome = '$nome',responsavel = '$responsavel', ramal= '$ramal', celular= '$celular' WHERE id = $ID";

    $query_clientes = $mysqli->query($sql_code) or die ($mysqli->error);
    if($deu_certo){
    echo 'deu certo';} else{echo $error;}
    $_SESSION['filial_editada'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=filiais');
}else{
    $_SESSION['erro'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=ifiliais');
}
?>