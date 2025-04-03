<?php
include_once "../../../model/Categoria.php";
$categoria = new Categorias();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sucesso = $categoria->adicionar($nome);
    header("Location: index.php?sucesso=adicionado");
    
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require_once __DIR__ . '/../../componets/head.php'; ?>

<body>
    <?php require_once __DIR__ . '/../../componets/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../componets/sidebar.php' ?>

    <main class="editar-categoria-div-container">
        <div class="editar-categoria-div">
            <h1>Nova Categoria</h1>


            <div class="categoria-edit-area-container">
                <form class="categoria-edit-area" action="categoria-criar.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome da Categoria:</label>
                        <input type="text" id="nome" name="nome" value="<?php echo $_POST['nome'] ?? ''; ?>" required>
                    </div>
                    <div class="buttons">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php require_once __DIR__ . '/../../componets/footer.php'; ?>
</body>

</html>