<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <?php
    include_once('./funcoes/conexao.php');
    session_start();
    ?>
</head>
<body>
    
   
    <div class="conteiner">
        <img class="logo" src="img/Art1.png" alt="" srcset="">
         <!-- Primeiro Conteiner -->
        <div class="content primeiro-content">
            
            <div class="primeira-coluna">
            <!-- descricao de login -->
            <h2 class="title title-primario">Bem vindo de volta!</h2>
            <p class="descricao">Para continuar conectado com a gente</p>
            <p class="descricao">click no botão de login abaixo</p>
            <button id="signin" class="btn btn-primario">Login</button>
            
            </div>
            <!-- Segundo conteiner -->
            <div class="segunda-coluna">
                <h2 class="title">Criar um conta</h2>
                <!-- Rede Sociais -->
                <div class="midia-sociais">
                <ul class="lista-midia">
                    <a class="link-social" href="https://www.facebook.com/FundacaoTerra/" target = "blank">
                        <li class="item-social-midia">
                            <i class="fab fa-facebook-f"></i>
                        </li>
                    </a>
                    <a class="link-social" href="https://www.youtube.com/channel/UCqGWLotw2C2k2MjrHQHIoDA" target = "blank">
                        <li class="item-social-midia">
                            <i class="fab fa-youtube"></i>
                        </li>
                    </a> 
                    <a class="link-social" href="https://twitter.com/fundacaoterra" target = "blank">   
                        <li class="item-social-midia">
                            <i class="fab fa-twitter"></i>
                    </li>
                </a>
                </ul>
                </div>
                <!-- Inicio do cadastro -->
               <form class="formulario" method = "POST" action="./funcoes/cadastrar.php">
                   <label class="label-input" for="nome"> 
                    <i class="far fa-user icone-mod"></i>
                        <input type="text" placeholder="Nome" name = "nome" id= "nome">
                    </label>
                    <label class="label-input" for="nome"> 
                        <i class="far fa-envelope icone-mod"></i>
                        <input type="email" placeholder="Email" name = "email" id="email">
                    </label>
                    <label class="label-input" for="nome"> 
                        <i class="fas fa-lock icone-mod" ></i>
                        <input type="password" placeholder="Senha" name = "senha" id="senha">
                    </label>
                    <button class="btn btn-secundario">Criar Conta</button>
                </form> 
                <!-- Fim Do Cadastro -->
            </div><!-- Segundo conteiner -->
        </div><!-- primeiro -->
        <div class="content segundo-content">
            <div class="primeira-coluna">
                <!-- descricao de login -->
                <h2 class="title title-primario">Olá amigo!</h2>
                <p class="descricao">Insira seus dados pessoas</p>
                <p class="descricao">e venha ter um viagem do conhecimento</p>
                <button id="signup" class="btn btn-primario">Inscreva-se</button>
                </div>
                <!-- Segundo conteiner -->
                <div class="segunda-coluna">
                    <h2 class="title">Entrar na biblioteca</h2>
                    <!-- Rede Sociais -->
                    <div class="midia-sociais">
                        <ul class="lista-midia">
                            <a class="link-social" href="https://www.facebook.com/FundacaoTerra/" target = "blank">
                                <li class="item-social-midia">
                                    <i class="fab fa-facebook-f"></i>
                                </li>
                            </a>
                            <a class="link-social" href="https://www.youtube.com/channel/UCqGWLotw2C2k2MjrHQHIoDA" target = "blank">
                                <li class="item-social-midia">
                                    <i class="fab fa-youtube"></i>
                                </li>
                            </a> 
                            <a class="link-social" href="https://twitter.com/fundacaoterra" target = "blank">   
                                <li class="item-social-midia">
                                    <i class="fab fa-twitter"></i>
                            </li>
                        </a>
                        </ul>
                        </div>
                        <form class="formulario" method = "POST" action = "./funcoes/login.php">
                            <!-- Inicio do Login -->
                             <label class="label-input" for="email"> 
                                 <i class="far fa-envelope icone-mod"></i>
                                 <input type="email" placeholder="Email" name ="email" id = "email">
                             </label>
                             <label class="label-input" for="senha"> 
                                 <i class="fas fa-lock icone-mod" ></i>
                                 <input type="password" placeholder="Senha" name = "senha" id="senha">
                             </label>
                             <!-- Fim do login -->
                         
                        <a class="senha" href="/esqueceSenha.html">Esqueceu a senha?</a>
                        <button class="btn btn-secundario">Login</button>
                    </form> 
                </div><!-- segundo container -->
        </div><!-- segundo container -->
    </div>    
    <script src="js/app.js"></script>
    <?php

if(@$_SESSION['cadastro_feito'] == true){
  echo  "<script>alert('cadastro efetuado com Sucesso!');</script>";
  unset($_SESSION['cadastro_feito']);
}
if(@$_SESSION['usuario_existe'] == true){
  echo  "<script>alert('usuario já cadastrado!');</script>";
  unset($_SESSION['usuario_existe']);
}
if(@$_SESSION['vazio'] == true){
    echo  "<script>alert('formulário vazio ');</script>";
    unset($_SESSION['vazio']);
  }
  if(@$_SESSION['nao_autenticado'] == true){
    echo  "<script>alert('usuario não autenticado!');</script>";
    unset($_SESSION['nao_autenticado']);
  }
?>
</body>
</html>