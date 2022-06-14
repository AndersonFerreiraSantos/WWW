<?php
session_start();
include('conexao.php');

/*Se o campo usuário ou senha vindo da action index for vazio, retornara a index.php*/
if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location:index.php');
    exit();
}
/*Essa variável serve apenas para fazer algumas validações, e não sofrer atack injection*/
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);


/*Criaçao da variável query, responsável por verificar se o login está correto ou não
ela está buscando em usuário, no grupo usuário o campo usuário e senha.*/
$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";


/*A result é responsavel por executar a query*/
$result = mysqli_query($conexao, $query);

/*row vem de linha, row será responsavel por buscar essa linha depois de vazer o processo anterior, que seria a validação */
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: cidade.php');
    exit();
}else{
    $_SESSION['login_invalido'] = true;
    header('Location: index.php');
    exit();
}

// inserir usuário banco de dados:
// inseres em usuario(nome do grupo no DB) os valores(...)com os calores('..','..');
// insert into usuario(email, nome, usuario, senha)values('anddersonfsantos@gmail.com', 'Anderson', 'Santerlock',md5('Santer@2'));

// selecione (* = todas as colunas) do usuario(nome do grupo no DB) quando 'usuario' for igual(dados da ID).
// select * from usuario where usuario='Santerlock' and senha=md5('Santer@2');

?>

