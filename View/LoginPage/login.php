<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Login Page</title>
</head>

<body>


    <div class="loginblock">
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
                    <input class="userInput" type="text" placeholder="Usuario / E-mail">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span><br><br>
                    <input class="userInput" type="text" placeholder="Senha">
                    <div class="btns">
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" type="submit" name="submit" id="submit">
                                    <b>Entrar</b>
                                </button>
                            </div>
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                               <a href="/index.php" style="text-decoration: none;"><button class="login100-form-btn" type="submit">
                                    <b>Voltar</b>
                                </button>
                                </a> 
                            </div>
                        </div>
                    </div>
                    <div class="baixo">
                        <a href="#" style="text-decoration: none;">
                            <h2 id="esqueceu">Esqueceu sua senha?</h2>
                        </a>
                        <h2 id="registrar2">Não tem conta? <a href="/View/RegisterPage/registrar.php" id="registrar">CADASTRAR</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>