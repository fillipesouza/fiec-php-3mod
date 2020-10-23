<?php include('models/produto.php'); ?>
<?php include('utils/connection.php'); ?>

<?php 

$listaProdutos = $pdo->query('SELECT * FROM t_produtos')->fetchAll(PDO::FETCH_CLASS, 'Produto');

?>

<?php include_once('partials/header.php'); ?>
<div class="row" >
<?php  foreach($listaProdutos as $item){ ?>

  <div class="card col-md-4">
  <img class="card-img-top" height="250px" src="imagens/<?=$item->getFoto()?>">
  <div class="card-body">
    <h5 class="card-title"><?=$item->getNome()?></h5>
    <p class="card-text">Preço: <strong><?=$item->getPreco()?></strong></p>
    <form method="POST" action="utils/comprar.php" >
    <label for="quantidade"  >Quantidade:</label>
      <input type="number" name="quantidade" id="quantidade" />
      <input type="hidden" name="id_produto" value="<?=$item->getId()?>" />
      <input type="hidden" name="id_usuario" value="<?=$_SESSION['meu_id']?>" />
      <button type="submit" class="btn btn-primary">Reservar</button>
    </form>
  </div>
</div>

<?php  } ?>

</div>
<?php include_once('partials/footer.php'); ?>