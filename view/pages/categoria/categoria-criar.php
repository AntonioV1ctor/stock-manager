<?php
include_once "../../../model/Categoria.php";
$categoria = new Categorias();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"] ?? '';
    
    if (empty($nome)) {
        $erro = "nome_vazio";
    } else {
        $sucesso = $categoria->adicionar($nome);
        
        if ($sucesso) {
            header("Location: index.php");
            exit;
        }
    }
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
            
            <?php if (isset($erro) && $erro == 'nome_vazio'): ?>
                <div class="alert alert-danger">O nome da categoria não pode ser vazio.</div>
            <?php elseif (isset($erro) && $erro == 'falha_adicionar'): ?>
                <div class="alert alert-danger">Falha ao adicionar categoria. Tente novamente.</div>
            <?php endif; ?>
            
            <div>
                <form class="categoria-edit-area" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome da Categoria:</label>
                        <input type="text" id="nome" name="nome" value="<?php echo isset($_POST['nome']) ? $_POST['nome'] : ''; ?>" required>
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