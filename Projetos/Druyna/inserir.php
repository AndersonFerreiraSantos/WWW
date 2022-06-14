<?php
    include('conexao.php');
    include("../config_session.php");
    header('Content-Type: application/json');

    $name = $_POST['namee'];

    $teste = "UPDATE usuario SET teste='$name' WHERE usuario='$user'";


    $conexao->query($teste);

    if ($stmt->rowCount() >= 1) {
        echo json_encode('Comentário Salvo com Sucesso');
    } else {
        echo json_encode('Falha ao salvar comentário');
    }