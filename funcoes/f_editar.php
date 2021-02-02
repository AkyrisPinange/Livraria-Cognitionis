<?php 
include_once("conexao.php");
$nome = $_POST['nome'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];
$id = $_POST['id'];


$sqlc = "UPDATE `livros` SET `nome`='".$nome."',`autor`='".$autor."',`genero`='".$genero."' WHERE id = ".$id;

$query = mysqli_query($connection,$sqlc);

header('Location: ../edicao.php');




?>