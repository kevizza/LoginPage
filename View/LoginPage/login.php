<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="/img/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <title>Enter In the Game - Asus</title>
    <?php

session_start();
if(isset($_POST['submit']) && !empty($_POST['login'])  && !empty($_POST['pass'])) {

include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$login = $_POST['login'];
$senha = md5($_POST['pass']);


        $sql = "SELECT * from usuarios where usuario='$login' or email='$login' and senha= '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows ($result) > 0 )
        {
        $_SESSION['login'] = $login;
        $_SESSION['pass'] = $pass;
        header('location: /View/PaginaApp/paginaapp.php');
        }
        else{
            echo "<script>
                alert('email usuario e ou senha incorretos');window.location
                .href='login.php'
            </script>
            ";
          }
}
?>
</head>

<body>

    <div class="loginblock">
    <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  This is an alert box.
</div>
        <div class="imagemLogin">
        </div>
        <div class="logincontent">
            
            <div class="login">
                <a href="/index.php"><img src="/img/logo.png" alt="Asus" id="logoLogin"></a>
                <h2>LOGIN</h2>
                <p>Insira seu usuario ou email e sua senha para ter acesso
                    a plataforma!
                </p>
                <div class="formLogin">
                <form action="./login.php" method="POST">
                    <input class="userInput" type="text" name="login" id="login" placeholder="Usuario / E-mail" required>
                    <br><br><br>
                    <input class="userInput" type="password" name="pass" id="pass" placeholder="Senha" required>
                    <div class="btns">
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" type="submit" name="submit" id="submit">
                                    <b>Entrar</b>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="baixo">
                        <a href="/View/RecuperarSenha/recuperar.php" style="text-decoration: none;">
                            <h2 id="esqueceu">Esqueceu sua senha?</h2>
                        </a>
                        <h2 id="registrar2">Não tem conta? <a href="/View/RegisterPage/registrar.php" id="registrar">CADASTRAR</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<Script src="/sweetalert2/sweetalert.js"></Script>

</html>