<?php
include_once "../../../model/Usuarios.php";
$usuarios = new Usuarios();
$db = $usuarios->listar();
?>

<?php require_once __DIR__ . '\..\..\componets\head.php'; ?>

<body class="usuario-body">
    <?php require_once __DIR__ . '\..\..\componets\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\..\componets\sidebar.php'; ?>

    <main class="usuario-main">
        <div class="usuario-container">
            <h1 class="title">Usuarios</h1>
            
            <div class="actions-user">
                <a href="usuario-criar.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
            </div>

            <div class="table-responsive">
                <table class="table-user">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Data Nascimento</th>
                            <th>Cpf</th>
                            <th>Genero</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($db as $usuario) { ?>
                            <tr>
                                <td><?php echo $usuario['id_user'] ?></td>
                                <td><?php echo $usuario['nome'] ?></td>
                                <td><?php echo $usuario['email'] ?></td>
                                <td><?php echo $usuario['telefone'] ?></td>
                                <td><?php echo $usuario['data_nascimento'] ?></td>
                                <td><?php echo $usuario['cpf'] ?></td>
                                <td><?php echo $usuario['genero'] ?></td>
                                <td class="actions-column">
                                    <a href="usuario-editar.php?id=<?php echo $usuario['id_user']; ?>" class="btn btn-edit">Editar</a>
                                    <form action="usuario-excluir.php" method="POST" style="display: inline;">
                                        <input type="hidden" name="id" value="<?php echo $usuario['id_user']; ?>">
                                        <button type="submit" class="btn btn-delete" onclick="return confirm('Tem certeza que deseja excluir este usuário?');">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <?php require_once __DIR__ . '\..\..\componets\footer.php'; ?>
</body>

</html>