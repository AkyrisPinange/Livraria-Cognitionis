<?php
session_start();
include_once('conexao.php');

$nome = mysqli_real_escape_string($connection, trim($_POST['nome']));
$senha = mysqli_real_escape_string($connection, trim(md5($_POST['senha'])));
$email = mysqli_real_escape_string($connection,trim($_POST['email']));




$sql_val = "SELECT COUNT(*) AS total FROM usuarios WHERE nome = '$nome'";
$resultado = mysqli_query($connection,$sql_val);
$row = mysqli_fetch_assoc($resultado);

if($nome == ""|| $senha == ""|| $email==""){
    $_SESSION['vazio'] = true;
    header('Location:../index.php');
    exit();
}

if ($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: ../index.php');
    exit();
}



$sql = "INSERT INTO usuarios (nome, senha, email) VALUES
('$nome', '$senha', '$email' )";

if ($connection->query($sql)=== true){
    $_SESSION['cadastro_feito'] = true;
}

$connection->close;

header('Location: ../index.php');
exit();

?>