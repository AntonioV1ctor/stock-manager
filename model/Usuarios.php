<?php 

require_once __DIR__ . "./../config/database.php";

class Usuarios{

private $conn;
private $tabela = "Usuario";

public function __construct(){
    $db = new Database();
    $this->conn = $db->conectar();
}

public function listar(){
    $query = "SELECT * FROM $this->tabela";
    $smt = $this -> conn ->prepare($query);
    $smt->execute();

    return $smt->fetchAll();
}
}