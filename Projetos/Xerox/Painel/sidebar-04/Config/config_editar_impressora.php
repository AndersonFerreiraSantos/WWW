
<?php 
session_start();
include('../../../banco.php');

$ID = $_POST['id'];
$nome=$_POST['nome'];
$modelo=$_POST['modelo'];
$filial=$_POST['filial'];
$secao=$_POST['secao'];
$ip=$_POST['ip'];

echo "$ID, $nome, $modelo, $filial, $secao, $ip.";

if($nome == ''){
    $_SESSION['nome_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}
if($modelo == ''){
    $_SESSION['modelo_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}
if($filial == ''){
    $_SESSION['filial_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}
if($secao == ''){
    $_SESSION['secao_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}
if($ip == ''){
    $_SESSION['ip_vazio'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}

if($nome != '' && $modelo != '' && $filial != '' && $secao != '' && $ip != ''){
    $sql_cliente = "SELECT * FROM impressoras";
    $query_cliente = $mysqli->query($sql_cliente) or die($mysqli->error);
    $cliente = $query_cliente->fetch_assoc();

    $sql_code="UPDATE impressoras SET nome = '$nome',modelo = '$modelo', ip= '$ip', filial= '$filial', secao = '$secao' WHERE id = $ID";

    $query_clientes = $mysqli->query($sql_code) or die ($mysqli->error);
    if($deu_certo){
    echo 'deu certo';} else{echo $error;}
    $_SESSION['impressora_editada'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}else{
    $_SESSION['erro'] = true;
    header('Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras');
}
?>