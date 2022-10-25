<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  echo "Bem-Vindo, convidado <br>";

  echo "Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
  echo "<br><a href='/View/LoginPage/login.php'>Faça Login</a> Para ler o conteúdo";

  echo"<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js'>
          Swal.fire('Our First Alert');
          </script>";
  }

$logado = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Asus GAMING</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>

      <div class="banner_bg_main">

         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Mais Vendidos</a></li>
                           <li><a href="#">Em Alta</a></li>
                           <li><a href="#">Novos Lançamentos</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><h1 style="color: white; font-size: 10vh; font-family: cursive;"></h1></a></div>
                  </div>
               </div>
            </div>
         </div>

         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.html">Home</a>
                     <a href="fashion.html">Teclados</a>
                     <a href="electronic.html">Mouses</a>
                     <a href="jewellery.html">Headsets</a>
                     <a href="jewellery.html">Computers</a>
                     <a href="jewellery.html">NoteBooks</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                  <div class="main">

                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquise aqui">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                           <li><a href="#">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Perfil</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital" style="color: #ff4545; text-shadow: 1em 1em 1em#262626;">Asus GAMING experience <br></h1>
                              <br><br><br><br><br>
                           </div>
                        </div>
                     </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>

      <div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Mouses</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Mouse Gaming, Asus, Rog Strix Evolve</h4>
                                 <p class="price_text">Preço  <span style="color: #262626;">240 R$</span></p>
                                 <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Comprar</a></div>

                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Mouse Gamer Asus ROG Gladius III</h4>
                                 <p class="price_text">Preço  <span style="color: #262626;">100 R$</span></p>
                                 <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Comprar</a></div>

                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Mouse Gamer Asus TUF Gaming M4</h4>
                                 <p class="price_text">Preço  <span style="color: #262626;">120 R$</span></p>
                                 <div class="tshirt_img"><img src="images/women-clothes-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Comprar</a></div>

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
 
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>

      <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Teclados</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Teclado Mecânico Gamer T-Dagger Bora</h4>
                                 <p class="price_text">Preço  <span style="color: #262626;">130 R$</span></p>
                                 <div class="electronic_img"><img src="images/laptop-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Comprar</a></div>

                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Teclado Mecânico Gamer Redragon Dark Avenger</h4>
                                 <p class="price_text">Preço  <span style="color: #262626;">460 R$</span></p>
                                 <div class="electronic_img"><img src="images/mobile-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Comprar</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Teclado Mecânico Gamer Redragon APS, RGB</h4>
                                 <p class="price_text">Preço  <span style="color: #262626;">80000 R$</span></p>
                                 <div class="electronic_img"><img src="images/computer-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Comprar</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

      <div class="jewellery_section">
         <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Headsets</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Headset Gamer Asus Rog Delta Core</h4>
                                 <p class="price_text">Preço  <span style="color: #262626;">20 r$</span></p>
                                 <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Comprar</a></div>

                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Headset Gamer Asus Tuf Gaming</h4>
                                 <p class="price_text">Preço  <span style="color: #262626;">90 R$</span></p>
                                 <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Comprar</a></div>

                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Headset Gamer Asus Cerberus V2</h4>
                                 <p class="price_text">Preço  <span style="color: #262626;">300 R$</span></p>
                                 <div class="jewellery_img"><img src="images/kangan-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Comprar</a></div>
  
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </div>
      </div>
  



      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>

      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>
</body>
</html>