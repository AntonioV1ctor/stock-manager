<?php
require_once  '../../../model/Produto.php';
$produto = new Produtos();
$lista = $produto->listar();
?>
<?php require_once __DIR__ . '\..\..\componets\head.php'; ?>

<body>
    <?php require_once __DIR__ . '\..\..\componets\navbar.php'; ?>
    <?php require_once __DIR__ . '\..\..\componets\sidebar.php'; ?>

    <main class="produtos-main">

        <h1 class="title">Produtos</h1>
        <div class="categoria-div-align">
            <div class="produto">
                <?php foreach ($lista as $produto) { ?>
                    <div class="produto-add">
                        <p id="text"><?php echo $produto['id_produto'] ?></p>
                        <p id="text"><?php echo $produto['nome'] ?></p>
                        <p id="text"><?php echo $produto['descricao'] ?></p>
                        <p id="text"><?php echo $produto['categoria_id'] ?></p>
                        <p id="text">R$ <?php echo $produto['preco'] ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>

    </main>

    <?php require_once __DIR__ . '\..\..\componets\footer.php'; ?>
</body>

</html>