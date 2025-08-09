<main class="content">
    <?php 
        renderTitle(
            'Cadastro de Usuários',
            'Mantenha os dados dos usuários atualizados',
            'users'
        );

        include(TEMPLATE_PATH . "/messages.php");
    ?>

    <a class="btn btn-primary mb-3"
    href="saveUserController.php">Novo Usuário</a>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Admissão</th>
            <th>Data de Desligamento</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?=$user->name?></td>
                    <td><?=$user->email?></td>
                    <td><?=$user->start_date?></td>
                    <td style="color: red"><?=$user->end_date?></td>
                    <td>
                        <a href="saveUserController.php?update=<?=$user->id?>" class="btn btn-warning btn-sm rounded-circle mr-3">
                            <i class="icofont-edit"></i>
                        </a>
                        <a href="?delete=<?=$user->id?>" class="btn btn-danger btn-sm rounded-circle">
                            <i class="icofont-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>