<?php
session_start();

//Destrio todas as seções:
session_destroy();
header('Location: index.php');
exit();
?>