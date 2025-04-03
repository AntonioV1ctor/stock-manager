<?php
require_once '../../../model/Usuarios.php';

$usuario = new Usuarios();

if (!isset($_GET['id'])) {
    header("Location: index.php?error=Usuário não encontrado.");
    exit();
}

$id = $_GET['id'];
$dados = $usuario->buscar($id);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];
    $genero = $_POST['genero'];

    if ($usuario->editar($id, $nome, $email, $telefone, $data_nascimento, $cpf, $genero)) {
        header("Location: index.php?success=Usuário atualizado com sucesso!");
        exit();
    } else {
        $erro = "Erro ao atualizar o usuário.";
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
            <h1>Editar Usuário</h1>

            <?php if (isset($erro)): ?>
                <div class="alert alert-danger"><?php echo $erro; ?></div>
            <?php endif; ?>

            <div>
                <form class="categoria-edit-area" method="POST">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $dados['email']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="telefone" value="<?php echo $dados['telefone']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Data de Nascimento</label>
                        <input type="date" name="data_nascimento" value="<?php echo $dados['data_nascimento']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" name="cpf" value="<?php echo $dados['cpf']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Gênero</label>
                        <select name="genero" required>
                            <option value="M" <?php echo ($dados['genero'] == 'M') ? 'selected' : ''; ?>>Masculino</option>
                            <option value="F" <?php echo ($dados['genero'] == 'F') ? 'selected' : ''; ?>>Feminino</option>
                            <option value="O" <?php echo ($dados['genero'] == 'O') ? 'selected' : ''; ?>>Outro</option>
                        </select>
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