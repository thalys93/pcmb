<?php

if (isset($_POST['submit'])) {

    //espaço destinado para fazer a conexão com o banco de dados

    include_once('config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_nasc = $_POST['data_nasc'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(email,senha,data_nasc) 
    VALUES('$email','$senha','$data_nasc')");
} 
    //Código de registro do banco de dados acima
?>

<?php
// Código para Entrar na página , caso a variavel de email e senha, esteja correta
// caso ao contrario, ele irá aparecer uma mensagem e logo voltará para a página de login

    // if ($email != null && $senha != null) {
    //     if ($email == $email && $senha == $senha){
    //         $msg= "Bem Vindo!";
    //         $redirect = "<meta http-equiv='refresh' content='1; url=./dashboard.html'/>";
    //     } else {
    //         $msg = "Conta Não encontrada no banco de Dados";
    //         $redirect = "<meta http-equiv='refresh' content='1; url=./login.php'/>";
    //     }
    // }


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Cadê Meu Banzo</title>
    <meta name="description" content="Cadê meu banzo é um site criado por um grupo de estudantes, com a ambiciosa ideia de mudar o Sistema de Transporte Público do Rio Grande do Sul, mais precisamente das cidades de Alvorada e Porto Alegre">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Ico/Cade%20meu%20Banzo.png">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Ico/Cade%20meu%20Banzo.png">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Ico/Cade%20meu%20Banzo.png">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Ico/Cade%20meu%20Banzo.png">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Ico/Cade%20meu%20Banzo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/divider-text-middle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
</head>

<body style="background: url(&quot;assets/img/header.jpg&quot;) top / cover no-repeat;"><a class="btn btn-primary" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" href="index.html" title="Voltar para Página Inicial?" style="margin: 3px;">Voltar</a>
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="color: rgb(255,255,255);">Tela de Login</h2>
                    <p data-bss-disabled-mobile="true" data-aos="fade-right" data-aos-duration="700" class="w-lg-50" style="color: rgb(0,0,0);background: #ffffff;font-size: 19px;border-radius: 16px;">Seja bem vindo ao nossa tela de Login, acesse os&nbsp; nossos demais recursos, é simples e fácil ;)</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center" data-bss-disabled-mobile="true" data-aos="fade" data-aos-duration="1050" style="border-radius: -6px;border-width: 4.4px;border-style: outset;">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <form class="text-center" method="POST" action="testLogin.php">
                                <div class="mb-3">
                                    <input class="form-control" type="email" name="email" id="email" placeholder="Digite Seu Email" required></div>
                                <div class="mb-3">
                                    <input class="form-control" type="password" name="senha" id="senha" placeholder="Digite Sua senha" required></div>
                                <div class="mb-3">
                                    <input class="btn btn-primary d-block w-100" type="submit" id="submit" name="submit" value="LOGIN"></input>
                                <div class="mb-3">
                                </div>
                                    <a class="btn btn-primary d-grid d-block w-100" role="button" id="registro-banco" href="forum-de-registro.php">Registrar-se</a>
                                <div class="mb-3">
                                </div>
                                    <a class="btn btn-link" role="button" href="resetar-a-senha.php">Resetar Senha W.I.P </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/creative.js"></script>
</body>

</html>