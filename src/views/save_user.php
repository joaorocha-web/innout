<main class="content">
    <?php
        renderTitle(
            'Cadastro de Usuário',
            'Crie ou atualize os usuários',
            'user'
        );

        include(TEMPLATE_PATH . "/messages.php");
    ?>

    <form action="#" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" placeholder="Informe o nome"
                class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>" value="<?= $name?>">
                <div class="invalid-feedback">
                    <?= $errors['name'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Insira um email válido"
                class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" value="<?= $email?>">
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Senha</label>
                <input type="text" id="password" name="password" placeholder="Ex: jq@#4566"
                class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['password'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="confirm-password">Confirme a Senha</label>
                <input type="text" id="confirm-password" name="confirm-password" placeholder=""
                class="form-control <?= $errors['confirm-password'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['confirm-password'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="stard_date">Data de Admissão</label>
            <input type="date" id="stard_date" name="stard_date" placeholder="informe a data de admissão"
                class="form-control <?= $errors['stard_date'] ? 'is-invalid' : '' ?>" value="<?= $start_date?>">
                <div class="invalid-feedback">
                    <?= $errors['stard_date'] ?>
                </div>
            </div>
    
            <div class="form-group col-md-6">
                <label for="end_date">Data de Desligamento</label>
                <input type="date" id="end_date" name="end_date" placeholder="informe a data de desligamento"
                class="form-control <?= $errors['end_date'] ? 'is-invalid' : '' ?>" value="<?= $end_date?>">
                <div class="invalid-feedback">
                    <?= $errors['end_date'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="is_admin">Administrador</label>
            <select type="text" id="is_admin" name="is_admin" placeholder="informe a data de admissão" class="form-control ">
                <option value="0">Não</option>
                <option value="1" <?= $is_admin ? 'selected' : ''?>>Sim</option>
            </select>
                <div class="invalid-feedback">
                    <?= $errors['is_admin'] ?>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-success">
                Salvar
            </button>
            <a href="/users.php" class="btn btn-secondary">
                Cancelar
            </a>
        </div>
    </form>
</main>