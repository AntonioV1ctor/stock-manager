<?php
require_once '../../../model/Produto.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $produto = new Produtos();

    if ($produto->excluir($id)) {
        header("Location: index.php?success=Produto excluído com sucesso!");
        exit();
    } else {
        header("Location: index.php?error=Erro ao excluir o produto.");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="produto.css">
    <title>Excluir Produto</title>
</head>
<body>
    <div class="produto-excluir-container">
        <div class="produto-excluir-box">
            <h1>Tem certeza que deseja excluir este produto?</h1>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <div class="produto-excluir-buttons">
                    <button class="btn btn-danger" type="submit">Excluir</button>
                    <a class="btn btn-secondary" href="index.php">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
