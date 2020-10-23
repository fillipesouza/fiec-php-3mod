<?php 
session_start();
include_once('connection.php');

$email = $_POST['email'];
$senha = $_POST['senha'];
$query = 'SELECT id, nome from t_usuarios
 where email="'. $email .'" and senha="'. $senha .'" LIMIT 1';
$resultado = $pdo->query($query)->fetch();

if( $resultado != NULL ) {
    $_SESSION['meu_id'] = $resultado['id'];
    $_SESSION['meu_nome'] = $resultado['nome'];
    header('Location: /canotran/produtos.php');
} else {
    header('Location: /canotran/?erro=Login Incorreto');
}


?>