<?php
session_start();
$acao = $_GET['acao'];
$ID = $_GET['ID'];
if($acao == 'editar'){
    $_SESSION['editar_impressora'] = true;
    header("Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras& ID='$ID'");
}

if($acao == 'cadastrar'){
    $_SESSION['cadastrar_impressora'] = true;
    header("Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=impressoras");
}

if($acao == 'editar_filial'){
    $_SESSION['editar_filial'] = true;
    header("Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=filiais& ID='$ID'");
}

if($acao == 'cadastrar_filial'){
    $_SESSION['cadastrar_filial'] = true;
    header("Location:http://localhost/Projetos/Projeto_toners_Xerox/Painel/sidebar-04/painel.php?painel=filiais");
}
?>
