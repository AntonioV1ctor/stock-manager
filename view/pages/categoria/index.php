<?php
include_once "../../../model/Categoria.php";

$categoria = new Categorias();
$lista = $categoria->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require_once __DIR__ . '/../../componets/head.php'; ?>

<body>
    <?php require_once __DIR__ . '/../../componets/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../componets/sidebar.php' ?>

    <main class="categoria-main">
        <div class="categoria-div-align">
            <h1 class="title">Categorias</h1>
            <div class="actions">
                <a href="categoria-criar.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Opções</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($lista as $db) { ?>
                        <tr>
                            <td><?php echo $db['id_categoria'] ?></td>
                            <td><?php echo $db['nome'] ?></td>
                            <td>
                                <form action="categoria-editar.php" method="GET" style="display: inline;">
                                    <input type="hidden" name="id" value="<?php echo $db['id_categoria'] ?>">
                                    <button type="submit" class="btn btn-edit">
                                        Editar
                                    </button>
                                </form>
                                <form action="categoria-excluir.php" method="POST" style="display: inline;" onsubmit="return confirm('Tem certeza que deseja excluir esta categoria?');">
                                    <input type="hidden" name="id" value="<?php echo $db['id_categoria'] ?>">
                                    <button type="submit" class="btn btn-delete">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

    <?php require_once __DIR__ . '/../../componets/footer.php'; ?>
</body>

</html>