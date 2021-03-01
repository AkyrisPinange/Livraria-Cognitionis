<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exibção</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styleexibicao.css">
  <link rel="stylesheet" href="css/bootstrap.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <?php
      session_start();
      include_once('./funcoes/pesquisar.php');
    ?>
</head>

<body>
  
  <div class="conteiner_exibicao">
    <p style="    position: relative; left: 68%; bottom: 45%; z-index: 20; font-weight: bolder; font-size: 20px;"> Bem-Vindo : <?php
    echo $_SESSION['user'];  ?> </p>
    <img class="logo" src="img/Art1.png" alt="" srcset="">
    <div class="content_exibicao" style = "left: -7%">
      <div class="formulario_exibicao">
      <div>
      <form class="radio-edit2" style="width: 950px; left: 10px;" action="resultado.php" method= "GET">
        <label class="label-input icone-mod" for="search_bar">
          <i class="fas fa-search"></i>
          <input class="inputs_exibicao" type="" placeholder="  Pesquisar" id = "search_bar" name="termo"> 
         
        </label>
        <button class="btn btn-secundario btn-exibicao btn-esquerda" style = "top: -15px; left: 3px;">Pesquisar</button>
        
       
        
          <div id = "input_skywalker">
          <input  type="radio"  name="metodo" value="genero" class="skywalker" style = "width: 15px;">
          <label class="radio-label-genero2" for="genero">Gênero</label><br>

          <input   type="radio"  name="metodo" value="nome" class="skywalker" style = "width: 15px;">

          <label class="radio-label-nome2" for="female">Nome</label><br>

          <input  type="radio" name="metodo" value="id" style = "width: 15px;">

          <label class="radio-label-id2"  for="other">ID</label>
          </div>
        </form>
        </div>

        <button class="btn btn-secundario btn-exibicao " onclick="window.location.href = 'edicao.php'">Editar</button>
        </div>
      <div class="Div_Barra">
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Autor</th>
              <th scope="col">Gênero</th>
              <th scope="col">...</th>
            </tr>
          <tbody>
              <?php
              while($result = mysqli_fetch_assoc($query)){
                echo('<tr> <th scope="row" >' .$result['id'].'</th> <td>' .$result['nome']. '</td> <td>' .$result['autor'].'</td> <td>'.
                $result['genero'] .'</td> <td> ... </td> </td>' );
               

              }
              ?>

            
          </tbody>
        </table>
        </thead>
        </table>
      </div>  
    </div>
    <button  class="btn btn-secundario btn-exibicao "  onclick="window.location.href = './funcoes/logout.php'" style="position : absolute;">Sair</button>
  </div>

  <script src="js/bootstrap.js"></script>
  <?php

  if(@($_SESSION['barrado']) == true){
    echo "<script>alert('RECURSO PARA ADMINISTRADORES');</script>";
     unset($_SESSION['barrado']);
  }
  //Verifica o Login
  if(@($_SESSION['logado']) == false){
    echo "<script>alert('Faça Login Para Entrar');</script>";
    unset($_SESSION['logado']);
    header('Location: index.php');
  }

  ?>

</body>

</html>
