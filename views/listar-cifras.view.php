<h3>
    </>Lista de cifras</h3>
<?php if (sizeof($cifras) == 0) : ?>
    <section>
        <div>
            <p>Não há cifras</p>
        </div>
    </section>
<?php else : ?>
    <table>
        <thead>
            <tr>
                <th>Música</th>
                <th>Autor</th>
                <th>Estilo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cifras as $cifra) : ?>
                <tr>
                    <td><?= $cifra->nome_musica; ?></td>
                    <td><?= $cifra->nome_autor; ?></td>
                    <td><?= $cifra->estilo; ?></td>
                    <td>
                        <a href="index.php?acao=mostrar-cifra&id=<?= $cifra->cifra_id; ?>">Ver cifra</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<form method="POST" action="index.php?acao=logout">
    <input type="submit" value="Logout" class="entrar-input">
</form>

<a href="index.php?acao=cadastrar-cifra">Cadastrar cifra</a>