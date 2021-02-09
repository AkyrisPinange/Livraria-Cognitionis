<?php
include_once("./funcoes/conexao.php");

$email = "teste@gmail.com";
$senha = "teste";



$getlogin = "SELECT nome FROM usuarios where email='$email' and senha = md5('$senha') ";
$getlogin_result= mysqli_query($connection,$getlogin);
$row = mysqli_fetch_assoc($getlogin_result);


echo $row['nome'];


?>