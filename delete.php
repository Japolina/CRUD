<?php
include_once './config/config.php';
include_once 'classes/Crud.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $crud = new Crud($db);
    $crud->delete($id);
    
    echo "Registro excluido com sucesso!!! 😎👍";
    header('refresh:3,index.php');
    exit();
}
?>