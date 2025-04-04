<?php 

require_once __DIR__ . "/../config/database.php";

class Usuarios {

    private $conn;
    private $tabela = "Usuario";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar() {
        $query = "SELECT * FROM $this->tabela";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function criar($nome, $email, $telefone, $data_nascimento, $cpf) {
        $query = "INSERT INTO $this->tabela (nome, email, telefone, data_nascimento, cpf) 
                  VALUES (:nome, :email, :telefone, :data_nascimento, :cpf)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute(compact('nome', 'email', 'telefone', 'data_nascimento', 'cpf'));
    }

    public function buscar($id) {
        $query = "SELECT * FROM $this->tabela WHERE id_user = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editar($id, $nome, $email, $telefone, $data_nascimento, $cpf) {
        $query = "UPDATE $this->tabela 
                  SET nome = :nome, email = :email, telefone = :telefone, 
                      data_nascimento = :data_nascimento, cpf = :cpf 
                  WHERE id_user = :id";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute(compact('id', 'nome', 'email', 'telefone', 'data_nascimento', 'cpf'));
    }

    public function excluir($id) {
        $query = "DELETE FROM $this->tabela WHERE id_user = :id";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute(['id' => $id]);
    }
}
