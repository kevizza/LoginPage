<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$nome_completo = $_POST['nome_completo'];
$nome_completo = $_POST['nome_completo'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$data_nasc = $_POST['data_nasc'];

$query_select = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
$select = mysqli_query($conexao, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['usuario'];

      if($logarray == $usuario){

       
        print"<Script>
            Swal.fire({
          icon: 'error',
          title: 'Essa conta já está registrada',
        })
        </Script>";

      }else{
        $query = "INSERT INTO usuarios (nome_completo,usuario,email,senha,data_nasc) VALUES ('$nome_completo','$usuario','$email','$senha','$data_nasc')";
        $insert = mysqli_query($conexao, $query);

        if($insert){
          header('Location: /View/LoginPage/login.php');
        }else{
          echo"<script type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='registrar.php'</script>";
        }
      }
?>