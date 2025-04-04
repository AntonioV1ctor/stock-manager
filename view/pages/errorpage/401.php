<?php require_once __DIR__ . '/../../componets/head.php'; ?>

<body>
    <?php require_once __DIR__ . '/../../componets/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../componets/sidebar.php' ?>

    <main class="error-main">
        <div class="Statuscode-div">
            <h1 class="Errorcode-401">401 Unauthorized</h1>
            <p class="Statuscode-401">Não foi possivel deletar essa categoria(produto) ele deve estar atrelado a um produto(categoria).</p>
        </div>
    </main>

    <?php require_once __DIR__ . '/../../componets/footer.php'; ?>
</body>

</html>