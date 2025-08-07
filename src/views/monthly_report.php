<main class="content">
    <?php
        renderTitle(
            'Relatório Mensal', 
            'Acompanhe seu saldo de horas',
            'ui-calendar'
        )
    ?>
    <div>
        <form class="mb-4" action="#" method="post">
            <div class="input-group">
                <?php if($_SESSION['user']->is_admin):?>
                <select name="user" class="form-control ml-1">
                    <?php foreach ($users as $user):?>
                        <option value="<?=$user->id?>" <?= $selectedUserId == $user->id ? 'selected' : '' ?>><?= $user->name ?></option>
                    <?php endforeach?>
                </select>
                <?php endif ?>
                <select name="period" class="form-control ml-2">
                    <?php foreach ($periods as $period => $yearAndMonth):?>
                        <option value="<?=$period?>" <?= $selectedPeriod == $period ? 'selected' : '' ?>><?= $yearAndMonth ?></option>
                    <?php endforeach?>
                </select>
                <button class="btn btn-primary ml-2">
                    <i class="icofont-search"></i>
                </button>
            </div>
        </form>

        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Dia</th>
                <th>Entrada 1</th>
                <th>Saída 1</th>
                <th>Entrada 2</th>
                <th>Saída 2</th>
                <th>Saldo</th>
            </thead>
            <tbody>
                <?php foreach($report as $registry):?>
                    <tr>
                        <td><?= formatDateWithLocale($registry->work_date, '%d de %B de %Y')?></td>
                        <td><?= $registry->time1?></td>
                        <td><?= $registry->time2?></td>
                        <td><?= $registry->time3?></td>
                        <td><?= $registry->time4?></td>
                        <td><?= $registry->getBalance() ?></td>
                    </tr>
                    <?php endforeach?>
                    <tr class="bg-primary text-white">
                        <td>Horas Trabalhadas</td>
                        <td colspan="3"><?= $sumOfWorkedTime?></td>
                        <td>Saldo Mensal</td>
                        <td><?= $balance?></td>
                    </tr>
            </tbody>
        </table>
    </div>
</main>