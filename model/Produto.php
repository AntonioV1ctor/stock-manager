<?php

require_once __DIR__ . "/../config/database.php";

class Produtos {
    private $conn;
    private $tabela = "Produto";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar() {
        $query = "SELECT * FROM $this->tabela ORDER BY id_produto ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function criar($nome, $descricao, $categoria_id, $preco) {
        $query = "INSERT INTO $this->tabela (nome, descricao, categoria_id, preco) VALUES (:nome, :descricao, :categoria_id, :preco)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute(compact('nome', 'descricao', 'categoria_id', 'preco'));
    }

    public function buscar($id) {
        $query = "SELECT * FROM $this->tabela WHERE id_produto = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editar($id, $nome, $descricao, $categoria_id, $preco) {
        $query = "UPDATE $this->tabela SET nome = :nome, descricao = :descricao, categoria_id = :categoria_id, preco = :preco WHERE id_produto = :id";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute(compact('id', 'nome', 'descricao', 'categoria_id', 'preco'));
    }

    public function excluir($id) {
        $query = "DELETE FROM $this->tabela WHERE id_produto = :id";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute(['id' => $id]);
    }
}
