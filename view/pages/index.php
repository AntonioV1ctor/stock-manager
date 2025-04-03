<?php
include_once "../../model/Categoria.php";
require_once  "../../model/Produto.php";
include_once "../../model/Usuarios.php";
$usuarios = new Usuarios();
$user = $usuarios->listar();

$categoria = new Categorias();
$category = $categoria->listar();

$produto = new Produtos();
$product = $produto->listar();
?>
<!DOCTYPE html>
<html lang="pt-br">

<?php require_once __DIR__ . '\..\componets\head.php'; ?>

<body>


    <?php require_once __DIR__ . '\..\componets\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\componets\sidebar.php' ?>

    <main class="home-main">
        <div class="home-container">
            <div class="default-box-count" id="product-cont-box">
                <h2><i id="default-icon-count" class="fa-solid fa-box"></i> Total de Produtos: <?php $quant_product = 0;
                                        foreach ($product as $produto) {
                                            $quant_product = $quant_product + 1;
                                        }
                                        echo "{$quant_product}"; ?></h2>
            </div>
            <div class="default-box-count" id="category-cont-box">
                <h2> <i id="default-icon-count" class="fa-solid fa-filter"></i> Total de Categorias: <?php $quant_category = 0;
                                        foreach ($category as $produto) {
                                            $quant_category = $quant_category + 1;
                                        }
                                        echo "{$quant_category}"; ?></h2>
            </div>
            <div class="default-box-count" id="user-cont-box">
                <h2> <i id="default-icon-count" class="fa-solid fa-user"></i> Total de Usuarios: <?php $quant_user = 0;
                                        foreach ($user as $produto) {
                                            $quant_user = $quant_user + 1;
                                        }
                                        echo "{$quant_user}"; ?></h2>
            </div>
        </div>
    </main>

    <?php require_once __DIR__ . '\..\componets\footer.php'; ?>
</body>

</html>