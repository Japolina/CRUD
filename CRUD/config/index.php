<?php
include_once 'config/config.php';
include_once 'classes/Crud.php';
$crud = new Crud($db);
$data = $crud->read();
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo CRUD</title>
</head>

<body>
    <h1>Tela Inicial</h1>
    <a href="add.php">Adicionar usuário</a>
    <table>
        <tr>
            <th>Nome </th>
            <th>Idade </th>
            <th>Ações </th>
        </tr>
        <?php
        while ($row = $data->fetch(PDO::FETCH_ASSOC))
        {?>
        <tr>
            <td> <?php echo $row['nome']; ?> </td>
            <td> <?php echo $row['idade']; ?> </td>
            <td>
                <a href="edit.php? id= <?php echo $row['id'] ?> ">Editar ✏️</a>
                <a href="delete.php? id= <?php echo $row['id'] ?>">Exluir 🗑️</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>