<?php
session_start();
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$qtdecoletiva = $_POST['qtdecoletiva'];
$precocoletivo = $_POST['precocoletivo'];
if (isset($_FILES['myfile'])) {
    $target_dir = "../imagens/";
    $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
    move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);

    $foto = basename($_FILES["myfile"]["name"]);
    
    $pre = 'INSERT INTO t_produtos (nome,preco,foto,qtdecoletiva,precocoletivo)
    values ("%s",%f,"%s",%d,%f)';
    $query = sprintf($pre, $nome, $preco, $foto, $qtdecoletiva, $precocoletivo );
    
    include_once('./connection.php');
    $pdo->query($query);
    $_SESSION['deu_bom'] = true;
    header('Location: /canotran/novo_produto.php');

}



?>