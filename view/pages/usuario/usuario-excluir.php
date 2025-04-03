<?php
require_once '../../../model/Usuarios.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $usuario = new Usuarios();

    if ($usuario->excluir($id)) {
        header("Location: index.php?success=Usuário excluído com sucesso!");
        exit();
    } else {
        header("Location: index.php?error=Erro ao excluir o usuário.");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="usuario.css">
    <title>Excluir Usuário</title>
</head>
<body>
    <div class="usuario-excluir-container">
        <div class="usuario-excluir-box">
            <h1>Tem certeza que deseja excluir este usuário?</h1>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <div class="usuario-excluir-buttons">
                    <button class="btn btn-danger" type="submit">Excluir</button>
                    <a class="btn btn-secondary" href="index.php">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html> 