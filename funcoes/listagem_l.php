<?php
include_once("conexao.php");

    $sqlc = "CREATE TABLE IF NOT EXISTS `admin`.`livros` ( `id` INT(20) NOT NULL AUTO_INCREMENT , `nome` VARCHAR(32) NOT NULL , `autor` VARCHAR(34) NOT NULL ,
     `genero` VARCHAR(32) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    
    $query = mysqli_query($connection,$sqlc);
    $sql = "SELECT * FROM livros";
    $query = mysqli_query($connection,$sql);
    



?>