<?php


session_start();
include_once('conexao.php');



$email = mysqli_real_escape_string($connection,$_POST['email']);
$senha = mysqli_real_escape_string($connection,$_POST['senha']);

$getlogin = "SELECT nome FROM usuarios where email='$email' and senha = md5('$senha') ";
$getlogin_result= mysqli_query($connection,$getlogin);
$queen = mysqli_fetch_assoc($getlogin_result);



$query = "SELECT email,senha FROM `usuarios` WHERE email='{$email}' and senha = md5('{$senha}')";
$result = mysqli_query($connection,$query);
$row = mysqli_num_rows($result);
echo $row;

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: ../index.php');
    exit();
}

$V_admin = "SELECT email,senha FROM admins where email='$email' and senha = md5('$senha') ";
$V_result = mysqli_query($connection,$V_admin);
$V_row = mysqli_num_rows($V_result);

if($V_row == 1){
    $_SESSION['admin'] = true;
    $_SESSION['logado'] = true;
    $_SESSION['user'] = "Administrador";
    header('Location: ../Exibicao.php');
    exit();
} else { 
         $_SESSION['admin'] = false;
             if($row == 1){ 
                $_SESSION['user'] = $queen['nome'];
                $_SESSION['logado'] = true;
                 header('Location: ../Exibicao.php');
                exit();
   
                        }else{
                                 $_SESSION['nao_autenticado'] = true;
                                  header('Location: ../index.php');
                                  exit();
}
}

?>