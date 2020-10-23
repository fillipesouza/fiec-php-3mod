<?php include_once('partials/header.php'); ?>
<form action="utils/cadastrar_produto.php" method="POST" enctype="multipart/form-data">


<div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="myfile" id="foto">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
            </form>
<?php include_once('partials/footer.php'); ?>