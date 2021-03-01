<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <?php
        include_once('./funcoes/conexao.php');
        session_start();
        if(@($_SESSION['admin']) == false){
            $_SESSION['barrado'] = true;
            header('Location: index.php');
            
          }
    ?>
</head>

<body>
    <?php
       $id = $_GET['id'];
       $sqlc = "SELECT * FROM `livros` WHERE id =".$id;
       $query = mysqli_query($connection,$sqlc);
       $result = mysqli_fetch_assoc($query);
          
    ?>
    <div class="conteiner">
        <div class="content_adicionar">
            
            <form class="formulario_adcionar" method="POST" action="./funcoes/f_editar.php? " id="shiu">
                <H1>Edição</H1>
                <div class="input-add">
                <label class="label-input" for="">
                    <i class="fas fa-book-open icone-mod"></i>
                    <input type="text" name="nome" placeholder="<?php echo $result['nome']   ?>">
                </label>
                <label class="label-input" for="">
                    <i class="fas fa-user-tie icone-mod"></i>
                    <input type="text" name="autor" placeholder="<?php echo $result['autor']   ?>">
                </label>
                <label class="label-input" for="nome">
                    <i class="fas fa-genderless icone-mod"></i>
                    <input type="text" name="genero" placeholder="<?php echo $result['genero']   ?>">
                </label>
                
                </div>
                <button class="btn btn-secundario" type="submit" form="shiu" value = "<?php  echo $id  ?>" name="id">CONFIRMAR</button>
                <inputy type="button" onclick="location.href='edicao.php'" class="btn btn-secundario">Voltar</button>
            </form>

        </div>

    </div>

</body>
<?php
//Verifica o Login
if(@($_SESSION['logado']) == false){
    echo "<script>alert('Faça Login Para Entrar');</script>";
    header('Location: index.php');
  }
?>
</html>