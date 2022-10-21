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
    <title>Register Page</title>
</head>

<body>
    <div class="loginblock">
        <div class="imagemLogin">
        </div>
        <div class="logincontent">
            <div class="login">
                <img src="/img/logo.png" alt="Asus" id="logoLogin">
                <h2>CADASTRO</h2>
                <p>Preencha os campos para criar sua conta
                </p>
                <div class="formLogin">
                <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-width="370" data-height="50" data-longtitle="true" data-lang="pt-BR"></div>
                    <input class="userInput" type="text" placeholder="Nome Completo">
                    <input class="userInput" type="text" placeholder="Nome de Usuario">
                    <input class="userInput" type="text" placeholder="Senha">
                    <input class="userInput" type="text" placeholder="Repetir senha">
                    <input class="userInput" type="date" >
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit" name="submit" id="submit">
                                <b>Cadastrar</b>
                            </button>
                        </div>
                    </div>
                    <p id="senhaEsqueceu">Esqueceu sua senha?</p>
                    <p id="login">Já possui uma conta? <a href="/View/LoginPage/login.php">LOGIN</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>