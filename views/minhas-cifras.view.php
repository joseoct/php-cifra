<div class="bg-image">
    <div class="cifra-list">
        <div class="cifra-list-container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-4 title-form">Minhas Cifras<i class="fas fa-guitar ml-3"></i></h2>
                    <?php if (sizeof($cifras) == 0) : ?>
                        <section>
                            <div>
                            <h2 class="text-center mb-5 title-form">Você não tem cifras cadastradas.</h2>
                            </div>
                        </section>
                    <?php else : ?>
                        <table class="table table-hover table-borderless cifras-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Música</th>
                                    <th scope="col">Artista</th>
                                    <th scope="col">Estilo</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cifras as $cifra) : ?>
                                    <tr>
                                        <td><?= $cifra->nome_musica; ?></td>
                                        <td><?= $cifra->nome_autor; ?></td>
                                        <td><?= $cifra->estilo; ?></td>
                                        <td class="btn-ver-cifra">
                                            <a class="btn btn-form " href="index.php?acao=mostrar-cifra&id=<?= $cifra->cifra_id; ?>">Ver Cifra <i class="fas fa-play ml-2"></i></a>
                                            <a class="btn btn-form " href="index.php?acao=deletar-cifra&id=<?= $cifra->cifra_id; ?>"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <a class="btn btn-form " href="index.php?acao=listar-cifras">Voltar <i class="fas fa-arrow-left ml-2"></i></a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>