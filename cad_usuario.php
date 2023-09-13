<?php
session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar</title>
</head>
<body>
    <a href="cad_usuario.php">Cadastrar</a><br>
    <a href="index.php">Listar</a><br>
    <h1>Cadastrar Usuario</h1>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    }

    ?>


    <form method="POST" action="proc_cad_usuario.php">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite o seu nome completo:"><br><br>

        <label>Email: </label>
        <input type="email" name="email" placeholder="Digite o seu E-mail:"><br><br>


        <input type="submit" value="Cadastrar">
</body>
</html>