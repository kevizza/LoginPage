
<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['login'])  && !empty($_POST['pass'])) {

include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$login = $_POST['login'];
$senha = md5($_POST['pass']);


        $sql = "SELECT * from usuarios where usuario='$login' or email='$login' and senha= '$senha'";

        $result = $conexao->query($sql);

        if (mysqli_num_rows($result)<=0){

          echo "<script type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";

        }else{

          setcookie("login", $login);
          header("Location:/View/PaginaApp/paginaapp.php");

        }

}
?>