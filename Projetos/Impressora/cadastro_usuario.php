<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="style/style_impressoras.css">
    <title>Document</title>
</head>

    <body>
    <a href="index.php" class="logout"> VOLTAR </a>

        <form class="index" action="config_cadastro.php" class="cadastro"  method="GET">
            <h1 class="titulos">CADASTRAR</h1>
             <input name="usuario" class="cadastro_text" size="23" type="text" value="usuario" ><br><br>
             <input name="senha" class="cadastro_text" size="23"  type="password" value="senha" ><br><br>
             <a class="nivel"> NIVEL:</a><br><select class="toner" value="nivel" name="nivel">
                <option value=1 >Usuário</option>
                <option value=2 >Administrador</option>
        </select>
            <button class="ps"type="submit">CONFIRMAR</button><br><br>

        </form>

    </body>

</html>

