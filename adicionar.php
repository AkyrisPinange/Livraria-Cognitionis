<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mudar senha</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <div class="conteiner">
        <div class="content_adicionar">
            
            <form class="formulario_adcionar"  method = "POST" action="./funcoes/f_adicionar.php">
                <H1>Adicionar Livros</H1>
                <div class="input-add">
                <label class="label-input" for="" >
                    <i class="fas fa-book-open icone-mod"></i>
                    <input type="text" placeholder="Nome do livro" name="nome">
                </label>
                <label class="label-input" for="" >
                    <i class="fas fa-user-tie icone-mod"></i>
                    <input type="text" placeholder="Autor" name = "autor">
                </label>
                <label class="label-input" for="nome" >
                    <i class="fas fa-genderless icone-mod"></i>
                    <input type="text" placeholder="Gênero" name = "genero">
                </label>
                
                </div>
                <button class="btn btn-secundario">CONFIRMAR</button>
                <inputy type="button" onclick="location.href='edicao.php'" class="btn btn-secundario">Voltar</button>
            </form>

        </div>

    </div>

</body>

</html>