<?php include_once('partials/header.php'); ?>
<?php  
if(isset($_SESSION['deu_bom'])){
    print('Deu bom');
    unset($_SESSION['deu_bom']);
}
?>
<div class="container">
<form action="utils/cadastrar_produto.php" method="POST" enctype="multipart/form-data">

<div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Nome"
              id="nome"
              name="nome"
              tabindex="2"
            />
            <label for="nome" class="form-label">Nome</label>
            </div>
            <div class="form-group">
            <input
              type="number"
              class="form-control"
              placeholder="Nº"
              id="preco"
              name="preco"
              step="0.01"
              tabindex="2"
            />
            <label for="preco" class="form-label">Preco</label>
            </div>
            <div class="form-group">
            <input
              type="number"
              class="form-control"
              placeholder="Quantidade Coletiva"
              id="qtdecoletiva"
              name="qtdecoletiva"
              tabindex="2"
            />
            <label for="qtdecoletiva" class="form-label">Quantidade Coletiva</label>
            </div>
            <div class="form-group">
            <input
              type="number"
              class="form-control"
              placeholder="Preço Coletivo"
              id="precocoletivo"
              name="precocoletivo"
              step="0.01"
              tabindex="2"
            />
            <label for="precocoletivo" class="form-label">Preço Coletivo</label>
            </div>

<div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="myfile" id="foto">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
            </form>
</div>
<?php include_once('partials/footer.php'); ?>