<div class="container">
    <div class="box">
      <h1>Editar atividade</h1>  

      <form method="POST" action="index.php?acao=atualizar&id=<?= $atividade->id; ?>">
        <div class="login-inputs">
          <span>Título</span>
          <input type="text" name="titulo" id="titulo" value="<?php echo $atividade->titulo ?>">
        </div>
        <div class="login-inputs">
          <span>Descrição</span>
          <input type="text" name="descricao" id="descricao" value="<?php echo $atividade->descricao ?>">
        </div>     
        <div class="login-inputs">
          <span>Status</span>
          <div>
            <input type="radio" id="nao-finalizada" name="situacao" value="nao-finalizada" checked>
            <label for="nao-finalizada">Não finalizada</label><br>
            <input type="radio" id="finalizada" name="situacao" value="finalizada">
            <label for="finalizada">Finalizada</label><br>
          </div>
        </div>

        <input type="submit" value="Atualizar" class="entrar-input">
      </form>

   </div>
  </div>