<div class="bg-image">
    <div class="form-new-cifra">
        <div class="row">
            <div class="col-md-12">
                <div class="new-cifra-container">
                    <h2 class="text-center mb-4 title-form">Cadastrar nova cifra <i class="fas fa-plus ml-2"></i></h2>
                    <form method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome da música:</label>
                            <input type="text" name="musica" class="form-control" id="exampleFormControlInput1" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome do Artista:</label>
                            <input type="text" name="autor" class="form-control" id="exampleFormControlInput1" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Estilo Musical:</label>
                            <select name="estilo" class="form-control" id="exampleFormControlSelect1">
                                <option value="" selected disabled hidden>Escolha um estilo</option>
                                <option value="Sertanejo">Sertanejo</option>
                                <option value="Rock">Rock</option>
                                <option value="Pop">Pop</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Cifra:</label>
                            <textarea name="conteudo" class="form-control" id="exampleFormControlTextarea1" rows="20" placeholder="Digite aqui o conteúdo de sua cifra..."></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-form mt-2 md-4" type="submit" value="Entrar">Enviar Cifra <i class="fas fa-plus ml-2"></i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
