<div class="app">
    <div class="nes-table-responsive">
        <div class="flex top">
            <h3 class="title"><i class="snes-jp-logo"></i>Lista de atividades não finalizadas</h3>
            <div class="a-div">
                <a href="index.php?acao=cadastrar">Cadastrar atividade</a>
                <a href="index.php?acao=feitas">Ver atividades feitas</a>
            </div>
        </div>
            <?php if(sizeof($naoFeitas) == 0): ?>
                <section>
                    <div>
                        <p>Não há atividades não-finalizadas!</p>
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
                    <?php foreach($naoFeitas as $atividade): ?>
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
        <a href="../clearSession.php">Logout</a>
    </div>
</div>