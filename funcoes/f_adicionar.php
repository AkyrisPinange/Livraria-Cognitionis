<?php
include_once("conexao.php");
session_start();

$nome =$_POST['nome'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];

$sql = "INSERT INTO livros (nome, autor, genero) VALUES
('$nome', '$autor', '$genero' )";

echo $nome ,$autor, $genero;

if ($connection->query($sql)=== true){
    $_SESSION['livro_adicionado'] = true;
    
    $connection->close;

    header('Location: ../edicao.php');
}


?>