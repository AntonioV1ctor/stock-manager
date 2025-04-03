<?php
require_once '../../../model/Produto.php';

$produto = new Produtos();
$lista = $produto->listar();
?>

<?php require_once __DIR__ . '/../../componets/head.php'; ?>

<body>
    <?php require_once __DIR__ . '/../../componets/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../componets/sidebar.php'; ?>

    <main class="produtos-main">
        <h1 class="title">Produtos</h1>
        <div class="actions">
            <a href="produto-criar.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Adicionar Produto</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $produto) { ?>
                    <tr>
                        <td><?php echo $produto['id_produto']; ?></td>
                        <td><?php echo $produto['nome']; ?></td>
                        <td><?php echo $produto['descricao']; ?></td>
                        <td><?php echo $produto['categoria_id']; ?></td>
                        <td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
                        <td>
                            <a href="produto-editar.php?id=<?php echo $produto['id_produto']; ?>" class="btn btn-edit">Editar</a>
                            <form action="produto-excluir.php" method="POST" style="display: inline;">
                                <input type="hidden" name="id" value="<?php echo $produto['id_produto']; ?>">
                                <button type="submit" class="btn btn-delete" onclick="return confirm('Tem certeza que deseja excluir este produto?');">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <?php require_once __DIR__ . '/../../componets/footer.php'; ?>
</body>

</html>
