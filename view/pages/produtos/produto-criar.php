<?php
require_once '../../../model/Produto.php';
require_once '../../../model/Categoria.php';

$produto = new Produtos();
$categoria = new Categorias();
$categorias = $categoria->listar();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria_id = $_POST['categoria_id'];
    $preco = $_POST['preco'];

    if ($produto->criar($nome, $descricao, $categoria_id, $preco)) {
        header("Location: index.php?success=Produto adicionado com sucesso!");
        exit();
    } else {
        $erro = "Erro ao adicionar o produto.";
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
            <h1>Adicionar Produto</h1>

            <div>
                <form class="categoria-edit-area" method="POST">
                    <div class="form-group">
                        <label>Nome do Produto</label>
                        <input type="text" name="nome" placeholder="Nome do produto" required>
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea name="descricao" placeholder="Descrição do produto" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select name="categoria_id" required>
                            <option value="">Selecione uma categoria</option>
                            <?php foreach ($categorias as $cat) { ?>
                                <option value="<?php echo $cat['id_categoria']; ?>"><?php echo $cat['nome']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Preço</label>
                        <input type="number" name="preco" step="0.01" placeholder="Preço" required>
                    </div>
                    <div class="buttons">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php require_once __DIR__ . '/../../componets/footer.php'; ?>
</body>

</html>