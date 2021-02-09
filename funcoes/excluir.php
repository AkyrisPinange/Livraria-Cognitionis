<?php
include_once("conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM `livros` WHERE id=".$id;


if($query = mysqli_query($connection,$sql)){
    header('Location: ../edicao.php');
}else{
    echo("error");
}
?>