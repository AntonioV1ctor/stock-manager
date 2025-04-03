<?php 

require_once __DIR__ . "/../config/database.php";

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

public function criar($nome, $email, $telefone, $data_nascimento, $cpf, $genero) {
    $query = "INSERT INTO $this->tabela (nome, email, telefone, data_nascimento, cpf, genero) VALUES (:nome, :email, :telefone, :data_nascimento, :cpf, :genero)";
    $stmt = $this->conn->prepare($query);
    return $stmt->execute(compact('nome', 'email', 'telefone', 'data_nascimento', 'cpf', 'genero'));
}

public function buscar($id) {
    $query = "SELECT * FROM $this->tabela WHERE id_user = :id";
    $stmt = $this->conn->prepare($query);
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function editar($id, $nome, $email, $telefone, $data_nascimento, $cpf, $genero) {
    $query = "UPDATE $this->tabela SET nome = :nome, email = :email, telefone = :telefone, data_nascimento = :data_nascimento, cpf = :cpf, genero = :genero WHERE id_user = :id";
    $stmt = $this->conn->prepare($query);
    return $stmt->execute(compact('id', 'nome', 'email', 'telefone', 'data_nascimento', 'cpf', 'genero'));
}

public function excluir($id) {
    $query = "DELETE FROM $this->tabela WHERE id_user = :id";
    $stmt = $this->conn->prepare($query);
    return $stmt->execute(['id' => $id]);
}
}