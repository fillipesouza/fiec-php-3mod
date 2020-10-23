<?php include_once('partials/header.php'); ?>
<?php  
    if( isset($_GET['erro']) ){
        print('<h2>' . $_GET['erro'] . '</h2>' );
    }
?>
<div class="login">
    <div class="header">
      <img src="../../../assets/logo.png" width="120" alt="" />
      <h1>Login</h1>
    </div>
    <div class="logar input-field">
      <input type="text" class="input" name="login" id="login" />
      <label class="label" for="login">Login</label>
    </div>
    <div class="senha">
      <label for="">Senha</label>
    </div>
  </form> -->
  <div class="container">
    <form action="utils/autentica.php" method="POST" class="form">
      
      <div class="header">
        <img src="../../../assets/logo.png" width="120" alt="" />
        <h1>Login</h1>
      </div>

      <div class="form-group">
        <input
          type="text"
          class="form-control"
          placeholder="Login"
          id="email"
          name="email"
          tabindex="1"
        />
        <label for="email" class="form-label">Email</label>
      </div>
      <div class="form-group">
        <input
          type="text"
          class="form-control"
          placeholder="Senha"
          id="senha"
          name="senha"
          tabindex="2"
        />
        <label for="senha" class="form-label">Senha</label>
      </div>
      <div class="botao">
        <button type="submit"><a href="">LOGIN</a></button>
      </div>
        <fieldset>
          <legend>ou</legend>
        </fieldset>
        <div class="cadastre"><a href="">cadastre-se</a></div>
    </form>
  </div>
</div>
<?php include_once('partials/footer.php'); ?>

  