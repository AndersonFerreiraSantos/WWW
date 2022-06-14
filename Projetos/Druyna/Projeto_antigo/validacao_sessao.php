<?php

    //se a sessão do usuário não existir ele volta para index.
    if(!$_SESSION['usuario']){
        header('Location:index.php');
        exit();
    }
?>