<?php
require_once "../../../model/Categoria.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $categoria = new Categorias();
    
    if ($categoria->excluir($id)) {
        header("Location: index.php?success=Categoria excluída com sucesso!");
        exit();
    } else {
        header("Location: ../errorpage/401.php ");
        exit();
    }
} else {
    header("Location: index.php?error=Requisição inválida.");
    exit();
}
?>
