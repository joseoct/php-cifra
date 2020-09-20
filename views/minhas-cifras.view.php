<div class="bg-image">
<<<<<<< HEAD
    <div class="cifra-list">
=======
    <div class="my-cifras">
>>>>>>> dev-will
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
<<<<<<< HEAD
                                        <td class="btn-ver-cifra">
                                            <a class="btn btn-form " href="index.php?acao=mostrar-cifra&id=<?= $cifra->cifra_id; ?>">Ver Cifra <i class="fas fa-play ml-2"></i></a>
                                            <a class="btn btn-form " href="index.php?acao=deletar-cifra&id=<?= $cifra->cifra_id; ?>"><i class="fas fa-trash-alt"></i></a>
=======
                                        <td class="btn-cifra-usuario">
                                            <a class="btn btn-form " href="index.php?acao=mostrar-cifra&id=<?= $cifra->cifra_id; ?>">Ver Cifra <i class="fas fa-play ml-2"></i></a>
                                            <a class="btn btn-form " href="index.php?acao=deletar-cifra&id=<?= $cifra->cifra_id; ?>">Excluir<i class="fas fa-trash-alt ml-2"></i></a>
>>>>>>> dev-will
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
<<<<<<< HEAD
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
=======
                    <div class="col-md-12 d-flex justify-content-center align-items-center">
>>>>>>> dev-will
                    <a class="btn btn-form " href="index.php?acao=listar-cifras">Voltar <i class="fas fa-arrow-left ml-2"></i></a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>