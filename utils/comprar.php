<?php 
session_start();
$id_usuario = $_POST['id_usuario'];
$id_produto = $_POST['id_produto'];
$quantidade = $_POST['quantidade'];
$compara = $_SESSION['meu_id'];
if ( $compara != $id_usuario) {
    echo("Deu Ruim!!");
} else {
    include_once('./connection.php');
    $pre = "INSERT INTO t_compras (id_usuario,id_produto,quantidade)
     values (%d, %d, %d)";
    $query = sprintf($pre, $id_usuario, $id_produto, $quantidade);
    $result = $pdo->query($query);
    echo("Deu Bom!!!");
}
?>