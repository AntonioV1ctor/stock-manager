<?php
include_once "../../../model/Categoria.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"] ?? null;
    $nome = $_POST["nome"] ?? '';
    
    if (empty($nome)) {
        header("Location: index.php?id=$id&erro=nome_vazio");
        exit;
    }
    
    $categoria = new Categorias();
    $sucesso = $categoria->atualizar($id, $nome);
    
    if ($sucesso) {
        header("Location: index.php?sucesso=atualizado");
    } else {
        header("Location: index.php?id=$id&erro=falha_atualizacao");
    }
    exit;
}


header("Location: index.php");
exit;