<?php

class Crud{
    private $conn;
    private $table_name = "tbusuario";

    public function __construct($db)
    {
        $this-> conn = $db;
    }
    public function create($nome, $idade){
        $query = "insert into ".$this->table_name." (nome,idade) value (?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute ([$nome, $idade]);
        return $stmt;
    }
    public function read(){
        $query = "select * from ".$this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function readEdit($id){
        $query = "select * from ".$this->table_name." where id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt;
    }
    public function update($id,$nome,$idade){
        $query = "update ".$this->table_name." set nome = ?, idade = ? where id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($nome, $idade, $id);
        return $stmt;
    }
    public function delete ($id){
        $query = "delete from ".$this->table_name." where id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt;
    }
}

?>