<?php

//Armazena o IP do banco de dados.
define('HOST','127.0.0.1');

//Armazena o usuário do banco de dados.
define('USUARIO','Santer');

//Armazena a senha do banco de dados.
define('SENHA','Santer@2' );

//Armazena o nome da base de dados.
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Deu erro cara, afs');
/*Criamos uma variavel que recebe, host, login, senha do banco de dado, caso ele não se conecte retornará "Deu erro cara, afs"
ERRO COMETIDO: Nome da DB é o nome dado a pasta principal que criamos dentro da pasta projeto, e não a projeto, como nesse caso é usuários.*/


