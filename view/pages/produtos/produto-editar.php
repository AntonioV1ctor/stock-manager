<?php
require_once '../../../model/Produto.php';
require_once '../../../model/Categoria.php';

$produto = new Produtos();
$categoria = new Categorias();
$categorias = $categoria->listar();

if (!isset($_GET['id'])) {
    header("Location: index.php?error=Produto não encontrado.");
    exit();
}

$id = $_GET['id'];
$dados = $produto->buscar($id);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria_id = $_POST['categoria_id'];
    $preco = $_POST['preco'];

    if ($produto->editar($id, $nome, $descricao, $categoria_id, $preco)) {
        header("Location: index.php?success=Produto atualizado com sucesso!");
        exit();
    } else {
        $erro = "Erro ao atualizar o produto.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt">

<?php require_once __DIR__ . '/../../componets/head.php'; ?>

<body>
    <?php require_once __DIR__ . '/../../componets/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../componets/sidebar.php'; ?>

    <main class="editar-categoria-div-container">
        <div class="editar-categoria-div">
            <h1>Editar Produto</h1>

            <?php if (isset($erro)): ?>
                <div class="alert alert-danger"><?php echo $erro; ?></div>
            <?php endif; ?>

            <div>
                <form class="categoria-edit-area" method="POST">
                    <div class="form-group">
                        <label>Nome do Produto</label>
                        <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea name="descricao" required><?php echo $dados['descricao']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select name="categoria_id" required>
                            <?php foreach ($categorias as $cat) { ?>
                                <option value="<?php echo $cat['id_categoria']; ?>" <?php echo ($cat['id_categoria'] == $dados['categoria_id']) ? 'selected' : ''; ?>>
                                    <?php echo $cat['nome']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Preço</label>
                        <input type="number" name="preco" step="0.01" value="<?php echo $dados['preco']; ?>" required>
                    </div>
                    <div class="buttons">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php require_once __DIR__ . '/../../componets/footer.php'; ?>
</body>

</html>