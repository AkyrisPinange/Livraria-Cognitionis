
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edição</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styleexibicao.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <?php
    session_start();
    include_once('./funcoes/listagem_l.php');
   
    if(@($_SESSION['admin']) == false){
      $_SESSION['barrado'] = true;
      header('Location: Exibicao.php');
    }
  ?>

</head>

<body>
  <div class="conteiner_exibicao">
  <p style="    position: relative; left: 68%; bottom: 45%; z-index: 20; font-weight: bolder; font-size: 20px;"> Bem-Vindo : <?php
    echo $_SESSION['user'];  ?> </p>
    <div>
   
    <img class="logo" src="img/Art1.png" alt="" srcset="">
  </div>
    <div class="content_exibicao" style = "left: -7%" >
      <div class="formulario_exibicao" >
      
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
          </form>
          </div>
        </div>
        <button class="btn btn-secundario btn-exibicao "
        onclick= "window.location.href = 'adicionar.php'"  style="left: -150px;">
          <i class="fas fa-plus-circle"></i> Adcionar</button>
        <button  class="btn btn-secundario btn-exibicao "  onclick="window.location.href = 'Exibicao.php'" style="left: -100px;">Voltar</button>
        
        </div>
        <div class="Div_Barra">
          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <!--
                <th>
                  <span class="custom-checkbox">
                    <input type="checkbox" id="selectAll">
                    <label for="selectAll"></label>
                  </span>
                </th>
  -->
           <tr>
              <th scope="col">#</th>
              <th scope="col" style="width: 245px">Nome</th>
              <th scope="col" style="width: 245px">Autor</th>
              <th scope="col" style="width: 255px">Gênero</th>
              <th scope="col" style="width: 255px">...</th>
            </tr>
              </tr>
              <tbody>
              
              <?php
              /*
 <td>
                   <span class="custom-checkbox">
                  <input type="checkbox" id="checkbox1" name="options[]" value="1">
                  <label for="checkbox1"></label>
                   </span>
                    </td> 
              */
              while($result = mysqli_fetch_assoc($query)){
                echo(' <tr>
                   
                    <th scope="col" id='.$result["id"].'>'.$result['id'].'</th> <td>' .$result['nome']. '</td> <td>' .$result['autor'].'</td> <td>'.
                $result['genero'] .'</td> 
                
                
                 
                <td>  
                <a  href="editar.php?id='.$result["id"].'" class="edit" data-toggle="modal"><i class="material-icons" 
                data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                
                <a href="./funcoes/excluir.php?id='.$result["id"].'" class="delete" data-toggle="modal"><i class="material-icons"
                data-toggle="tooltip" title="Delete">&#xE872;</i></a>
              </td>  </tr>   ' );
               

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
  <?php
        //Verifica se o usuario está autenticado
        if(@$_SESSION['livro_adicionado'] == true){
          echo  "<script>alert('Livro Cadastrado!');</script>";
          unset($_SESSION['livro_adicionado']);
        }
        //Verifica o Login
        if(@($_SESSION['logado']) == false){
          echo "<script>alert('Faça Login Para Entrar');</script>";
          header('Location: index.php');
        }
    ?>
  <script 
  src="js/bootstrap.js"
  src="js/links.js">
 </script>

  
</body>


</html>