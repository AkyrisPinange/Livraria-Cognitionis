<?php
include_once("conexao.php");
session_start();



$nome = mysqli_real_escape_string($connection, trim($_POST['nome']));
$nova_senha = mysqli_real_escape_string($connection, trim(md5($_POST['nova_senha'])));
$orig_senha = mysqli_real_escape_string($connection, trim(md5($_POST['orig_senha'])));

$sql = "UPDATE `usuarios` SET `senha`= '".$nova_senha."' WHERE nome='".$nome."' and senha='".$orig_senha."'";



if ($update = mysqli_query($connection,$sql)){

    $_SESSION['atualizado'] = true;
    header('Location:../index.php');
    exit();

}else{
  

    
    $_SESSION['atualizado'] = false;
    header('Location:../esqueceSenha.html');
    exit();
    
}



?>