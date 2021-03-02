<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'admin');
define('SENHA', '');
define('DB', 'admin');



$connection = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('não foi possivel conectar');

$sql = "CREATE DATABASE IF NOT EXISTS admin";

mysqli_query($connection,$sql);



$sql = "CREATE TABLE IF NOT EXISTS admins";
mysqli_query($connection,$sql);


$sql = "CREATE TABLE IF NOT EXISTS livros";
mysqli_query($connection,$sql);

$sql = "CREATE TABLE IF NOT EXISTS usuarios";
mysqli_query($connection,$sql);

$sql = "CREATE TABLE IF NOT EXISTS `admin`.`admins` ( `id` INT(20) NOT NULL AUTO_INCREMENT , `senha` VARCHAR(32) NOT NULL , 
        `nome` VARCHAR(32) NOT NULL , `email` VARCHAR(64) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";


$sql = "CREATE TABLE IF NOT EXISTS `admin`.`livros` ( `id` INT(20) NOT NULL AUTO_INCREMENT , `nome` VARCHAR(32) NOT NULL ,
         `autor` VARCHAR(34) NOT NULL , `genero` VARCHAR(64) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";


$sql = "CREATE TABLE IF NOT EXISTS `admin`.`usuarios` ( `usuario_id` INT(11) NOT NULL AUTO_INCREMENT ,
        `senha` VARCHAR(32) NOT NULL , `nome` VARCHAR(34) NULL , `email` VARCHAR(64) NULL , PRIMARY KEY (`usuario_id`)) ENGINE = InnoDB;"
        

?>

