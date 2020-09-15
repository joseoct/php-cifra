<h1>Cadastrar cifra</h1>  

<form method="POST">
  <div class="login-inputs">
    <span>Nome da música</span>
    <input type="text" name="musica" id="name">
  </div>
  <select name="estilo" id="cars">
  <option value="" selected disabled hidden>Escolha um estilo</option>
    <option value="sertanejo">Sertanejo</option>
    <option value="rock">Rock</option>
    <option value="pop">Pop</option>
  </select>
  <div class="login-inputs">
    <span>Nome do autor</span>
    <input type="text" name="autor" id="pass">
  </div>  
  <div class="login-inputs">
    <span>Cifra</span>
    <textarea name="conteudo" id="cifra" rows="40"></textarea>
  </div>
  
    <input type="submit" value="Cadastrar" class="entrar-input">
</form>
