<?php
include_once './config/config.php';
include_once 'classes/Crud.php';
$crud = new Crud($db);
$data = $crud->read();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Exemplo de CRUD</title>
</head>

<style>
    table {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10px auto;
        width: 400px;
        display: flex;
        border: 1px solid black;
        border-radius: 10px; 
    }

    h1 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    a {
        margin: 10px auto;
        justify-content: center;
        align-items: center;
        display: flex;
        padding: 10px;
        border: 1px solid black;
        border-radius: 10px;
        background-color: teal ;
        color: white;
    }
    .addUsu {
        width: 150px;
        justify-content: center;
        align-items: center;
        display: flex;
        border: 1px solid black;
        border-radius: 10px;
        background-color: teal ;
        color: white;
    }
    tr{
        width: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        display: flex;
        border: 1px solid black;
        border-radius: 10px;
    }
    .nome {
        display: flex;
        width: 150px;
    }
    .idade {
        display: flex;
        width: 100px;
    }
    .acoes{ 
        display: flex;
        width: 0px;
    }
    .tabNome {
        display: flex;
        width: 180px;
        border: 1px solid black;
        border-radius: 10px;
        padding: 75px 10px;
        
    }
    .tabIdade {
        padding: 75px 10px;
        display: flex;
        width: 130px;
        justify-content: center;
        align-items: center;
        border: 1px solid black;
        border-radius: 10px;
    }
    .tabAcao{
        padding: 29px 10px;
        display: flexbox;
        border: 1px solid black;
        border-radius: 10px;
        
    }
</style>

<body>
    <h1>Exemplo de CRUD</h1>
    <a href="add.php" class="addUsu">Adicionar Usuário</a>
    <table>
        <tr>
            <th class="nome">Nome</th>
            <th class="idade">Idade</th>
            <th class="acoes">Ações</th>
        </tr>
        <?php

        while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td class="tabNome"><?php echo $row['nome']; ?></td>
                <td class="tabIdade"><?php echo $row['idade']; ?></td>
                <td class="tabAcao"> <a href="edit.php?id=<?php echo $row['id']; ?>">Editar</a> <a href="delete.php?id=<?php echo $row['id']; ?>">Excluir</a> </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>
