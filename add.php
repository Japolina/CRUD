<?php
include_once './config/config.php';
include_once './classes/Crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $crud = new Crud($db);
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $crud->create($nome, $idade);
    header('refresh:2, index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<style>
    .container {
        width: 100px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin: 10px auto;
    }

    h1 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    form input {
        width: 200px;
        display: flex;
        padding: 10px;
        margin-top: 20px;
        border: 1px solid black;
        border-radius: 10px;
    }

    .salvar {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: olivedrab;
        color: white;
    }

</style>

<body>
    <h1>Tela Cadastro</h1>
    <div class="container">

        <form method="post">
            <input type="text" name="nome" id="nome" maxlength="24" placeholder="Insira seu nome completo" required>
            <input type="number" name="idade" id="idade" placeholder="Insira sua idade" required>
            <input type="submit" value="Salvar" class="salvar">
        </form>

    </div>

</body>

</html>