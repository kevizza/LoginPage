<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="/img/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Make Your Jurney - Asus</title>
</head>

<body>
    <div class="loginblock">
        <div class="imagemLogin">
        </div>
        <div class="logincontent">
            <div class="login">
                <a href="/index.php">
                    <img src="/img/logo.png" alt="Asus" id="logoLogin">
                </a>
                <h2>CADASTRO</h2>
                <p>Preencha os campos para criar sua conta
                </p>
                <div class="formLogin">
                    <form action="cadastro.php" method="POST" id="cad-form">
                        <input class="userInput" type="text" name="nome_completo" id="nome_completo" placeholder="Nome Completo" minlength="10" maxlength="50" required>
                        <input class="userInput" type="text" name="usuario" id="usuarioo" placeholder="Nome de Usuario" minlength="3" maxlength="36" required>
                        <input class="userInput" type="text" name="email" id="email" placeholder="E-mail" pattern="^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$" required>
                        <input class="userInput" type="password" name="senha" id="senha" placeholder="Senha" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,12}$" title="A senha deve conter entre 6- 12, pelo menos letra maiúscula, um número e não deve conter símbolos." required>
                        <input class="userInput" type="password" name="senha" id="senha" placeholder="Reescreva aSenha" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,12}$" title="A senha deve conter entre 6 - 12, pelo menos letra maiúscula, um número e não deve conter símbolos." required>
                        <input class="userInput" type="date" name="data_nasc" id="data_nasc" required>
                        <div class="btns">
                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                                        <b>CADASTRAR</b>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                    <div class="baixo">
                        <h2 id="registrar2">Já possui conta? <a href="/View/LoginPage/login.php" id="registrar">ENTRAR</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<Script src="/sweetalert2/sweetalert.js"></Script>
<Script>
    Swal.fire({
  icon: 'error',
  title: 'Essa conta já está registrada',
})
</Script>

</html>