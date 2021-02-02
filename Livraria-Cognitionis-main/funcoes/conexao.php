<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'admin');
define('SENHA', '291255');
define('DB', 'admin');

$connection = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('não foi possivel conectar');

?>