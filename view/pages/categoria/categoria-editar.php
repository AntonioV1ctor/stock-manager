<?php
include_once "../../../model/Categoria.php";
$categoria = new Categorias();

if (isset($_GET["id"])) {
    $id_categoria = $_GET["id"];
    $categoria_data = $categoria->obterPorId($id_categoria);
} else {
    header("Location: index.php");
    exit;
}

$erro = $_GET["erro"] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require_once __DIR__ . '/../../componets/head.php'; ?>

<body>
    <?php require_once __DIR__ . '/../../componets/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../componets/sidebar.php' ?>

    <main class="editar-categoria-div-container">
        <div class="editar-categoria-div">
            <h1>Editar Categoria</h1>

            <?php if ($erro == 'nome_vazio'): ?>
                <div class="alert alert-danger">O nome da categoria não pode ser vazio.</div>
            <?php elseif ($erro == 'falha_atualizacao'): ?>
                <div class="alert alert-danger">Falha ao atualizar categoria. Tente novamente.</div>
            <?php endif; ?>

            <div>
                <form class="categoria-edit-area" action="categoria-salvar.php" method="POST">

                    <input type="hidden" name="id" value="<?php echo $id_categoria; ?>">
                    <div class="form-group">
                        <label for="nome">Nome da Categoria:</label>
                        <input type="text" id="nome" name="nome" value="<?php echo $categoria_data['nome']; ?>" required>
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