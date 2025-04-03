<?php
include_once "../../../model/Usuarios.php";
$usuarios = new Usuarios();
$db = $usuarios->listar();
?>




<?php require_once __DIR__ . '\..\..\componets\head.php'; ?>

<body>
    <?php require_once __DIR__ . '\..\..\componets\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\..\componets\sidebar.php'; ?>

    <main class="usuario-main">
        <div class="usuario-container">
            <h1 class="title">Usuarios</h1>

            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Telefone</th>
                    <th>Data Nascimento</th>
                    <th>Cpf</th>
                    <th>Genero</th>
                    <th>Foto Perfil</th>
                    <th>Options</th>

                </thead>
                <tbody>
                    <?php foreach ($db as $usuario) { ?>
                        <tr>
                            <td><?php echo $usuario['id_user'] ?></td>
                            <td><?php echo $usuario['nome'] ?></td>
                            <td><?php echo $usuario['email'] ?></td>
                            <td><?php echo $usuario['senha'] ?></td>
                            <td><?php echo $usuario['telefone'] ?></td>
                            <td><?php echo $usuario['data_nascimento'] ?></td>
                            <td><?php echo $usuario['cpf'] ?></td>
                            <td><?php echo $usuario['genero'] ?></td>
                            <td><?php echo $usuario['foto_perfil'] ?></td>
                            <td>
                                <form action="visualizar.php" method="GET">
                                    <input type="hidden" name="id" value="<?php echo $usuario['id_user'] ?>">
                                    <button>
                                        <span class="material-symbols-outlined">
                                            visibility
                                        </span>
                                    </button>
                                </form>

                                <form action="cadastro.php" method="GET">
                                    <input type="hidden" name="id" value="<?php echo $usuario['id_user'] ?>">
                                    <button>
                                        <span class="material-symbols-outlined">
                                            edit
                                        </span>
                                    </button>
                                </form>

                                <form action="excluir.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $usuario['id_user'] ?>">
                                    <button onclick="return confirm('Tem certeza que deseja excluir o filme?')">
                                        <span class="material-symbols-outlined">
                                            delete
                                        </span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

    <?php require_once __DIR__ . '\..\..\componets\footer.php'; ?>
</body>

</html>