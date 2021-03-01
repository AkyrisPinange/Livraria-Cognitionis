<?php
  include_once('conexao.php');

  $termo = $_GET['termo'];
  $metodo = $_GET['metodo'];  

    $sql = "SELECT * FROM livros WHERE ".$metodo." = '".$termo."'";

   $query = mysqli_query($connection,$sql);

   


?>