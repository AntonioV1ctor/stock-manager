<?php 

require_once __DIR__ . "/../config/database.php";

class Categorias{

    private $conn;
    private $tabela = "Categoria";

    public function __construct(){
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar() {
        $sql = "SELECT * FROM Categoria ORDER BY id_categoria ASC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function obterPorId($id){
        $query = "SELECT * FROM $this->tabela WHERE id_categoria = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $nome){
        $query = "UPDATE $this->tabela SET nome = :nome WHERE id_categoria = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':id', $id);
        
        try {
            return $stmt->execute();
        } catch(PDOException $e) {
            return false;
        }
    }

    public function adicionar($nome){
        $query = "INSERT INTO $this->tabela (nome) VALUES (:nome)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        
        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao adicionar categoria: " . $e->getMessage();
            return false;
        }
    }
    
    public function excluir($id){
        $query = "DELETE FROM $this->tabela WHERE id_categoria = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        
        try {
            return $stmt->execute();
        } catch(PDOException $e) {
            return false;
        }
    }
}