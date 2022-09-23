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
                <img src="/img/logo.png" alt="" id="logoLogin">
                <h2>LOGIN</h2>
                <p>Insira seu usuario ou email e sua senha para ter acesso
                    a plataforma!
                </p>
                <div class="formLogin">
                    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
                    <input class="userInput" type="text" placeholder="Usuario / E-mail"> <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span><br><br>
                    <input class="passInput" type="text" placeholder="Senha">
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit" name="submit" id="submit">
                                <b>Entrar</b>
                            </button>
                        </div>
                    </div>
                    <a href="#"><p>Esqueceu sua senha?</p></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function onSignIn(googleUser) {
            // Useful data for your client-side scripts:
            var profile = googleUser.getBasicProfile();
            console.log("ID: " + profile.getId()); // Don't send this directly to your server!
            console.log('Full Name: ' + profile.getName());
            console.log('Given Name: ' + profile.getGivenName());
            console.log('Family Name: ' + profile.getFamilyName());
            console.log("Image URL: " + profile.getImageUrl());
            console.log("Email: " + profile.getEmail());

            // The ID token you need to pass to your backend:
            var id_token = googleUser.getAuthResponse().id_token;
            console.log("ID Token: " + id_token);
        }
    </script>
</body>

</html>