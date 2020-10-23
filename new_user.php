<?php include_once('partials/header.php'); ?>

<div class="cadastro">
      <div class="container">
        <form class="form">
          <div class="header">
            <h1>Cadastro</h1>
          </div>

          <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Nome"
              id="name"
              name="name"
              tabindex="1"
            />
            <label for="name" class="form-label">Nome</label>
          </div>
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Email"
              id="email"
              name="email"
              tabindex="2"
            />
            <label for="email" class="form-label">Email</label>
          </div>
          <div class="form-group">
            <input
              type="password"
              class="form-control"
              placeholder="Senha"
              id="senha"
              name="senha"
              tabindex="2"
            />
            <label for="senha" class="form-label">Senha</label>
          </div>

          <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="CEP"
              id="cep"
              name="cep"
              tabindex="2"
            />
            <label for="cep" class="form-label">CEP</label>
            </div>
            <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Nº"
              id="numero"
              name="numero"
              tabindex="2"
            />
            <label for="numero" class="form-label">Numero</label>
            </div>
            <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Complemento"
              id="complemento"
              name="complemento"
              tabindex="2"
            />
            <label for="complemento" class="form-label">Complemento</label>
            </div>
          <div class="botao">
            <button><a href="">CADASTRAR</a></button>
          </div>
        </form>
      </div>
    </div>

    <?php include_once('partials/footer.php'); ?>