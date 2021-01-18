<?php


session_start();
include_once('conexao.php');



$email = mysqli_real_escape_string($connection,$_POST['email']);
$senha = mysqli_real_escape_string($connection,$_POST['senha']);
$query = "SELECT email,senha FROM `usuarios` WHERE email='{$email}' and senha = md5('{$senha}')";
$result = mysqli_query($connection,$query);
$row = mysqli_num_rows($result);

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: ../index.php');
    exit();
}


if($row == 1){
  
    $_SESSION['login'] = $login;
    header('Location: ../Exibicao.php');
    exit();
   
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../index.php');
    exit();
}


?>