<div class="app">
    <div class="nes-table-responsive">
        <div class="flex top">
            <h3 class="title">Lista de atividades finalizadas</h3>
            <a href="index.php?acao=cadastrar" class="nes-btn is-success mt-30">Cadastrar atividade</a>
        </div>
            <?php if(sizeof($feitas) == 0): ?>
                <section class="message -left">
                    <div class="nes-balloon from-left">
                        <p>Não há atividades finalizadas!</p>
                    </div>
                </section>
            <?php else: ?>
            <table class="nes-table is-bordered is-centered mt-30">
                <thead>
                    <tr>
                        <th class="w-40">Atividade</th>
                        <th class="w-40">Descricao</th>
                        <th class="w-20">Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($feitas as $atividade): ?>
                        <tr>
                            <td><?= $atividade->titulo; ?></td>
                            <td><?= $atividade->descricao; ?></td>
                            <td><?= $atividade->situacao; ?></td>
                            <td>
                                <div class="flex">
                                    <a href="index.php?acao=editar&id=<?= $atividade->id; ?>" >Editar</a> &nbsp;
                                    <a href="index.php?acao=remover&id=<?= $atividade->id; ?>">X</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>