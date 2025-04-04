<?php
require_once '../../../model/Usuarios.php';
$usuario = new Usuarios();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];

    if ($usuario->criar($nome, $email, $telefone, $data_nascimento, $cpf, $genero)) {
        header("Location: index.php");
        exit();
    } else {
        header("Location: ../errorpage/401.php ");
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
            <h1>Adicionar Usuário</h1>

            <div>
                <form class="categoria-edit-area" method="POST">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" placeholder="Nome completo" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="telefone" placeholder="Telefone" required>
                    </div>
                    <div class="form-group">
                        <label>Data de Nascimento</label>
                        <input type="date" name="data_nascimento" required>
                    </div>
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" name="cpf" placeholder="CPF" required>
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