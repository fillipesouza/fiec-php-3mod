<?php 

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];

$pre = 'INSERT INTO t_usuarios (nome,email,senha,cep,numero,complemento)
 values ("%s","%s","%s","%s",%d,"%s")';

$query = sprintf($pre, $nome, $email, $senha, $cep, $numero, $complemento);
include("./connection.php");

$result = $pdo->query($query);


header('Location: /canotran/');



?>