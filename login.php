<?php include ('conexao/conexao.php');

 if(isset($_POST['login']) || isset($_post['senha'])){

    if(strlen($_POST['login']) == 0){
        echo "preencha seu login";}
       else if(strlen($_POST['senha']) == 0){
            echo "preencha sua senha";
    } else{
        $login= $mysqli->real_escape_string($_POST['login']);
        $senha= $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT *from usuario where login = '$login' and senha = '$senha'";
        $sql_query= $mysqli->query($sql_code) or die ("falha na execução do codigo: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;
        if($quantidade == 1){
            $usuario =$sql_query->fetch_assoc();
            if(isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: .php");
        }else{
        echo "falha ao logar! login ou senha errada";
        }
    }
 }?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> No Waaste </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
    crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page ">

  <div class="hero_area">
    <div class="bg-box">
      <img src="https://i.pinimg.com/originals/4c/3c/5e/4c3c5e4ed2af2690d979c29e6142ac05.jpg" alt="">
    </div>
    <!-- header section strats -->
    <div class="bodya">
      <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
                <span style="color: chartreuse;">No</span> Waste
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  mx-auto ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="doacao.php">Quem somos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="quemsomos.html">Contate-nos</a>
                </li>

              </ul>

              <div>
                <a href="login.html" class="login">
                  Login
                </a>
              </div>
              <div class="user_option">
                <a href="cadastro.html" class="order_online">
                  Participe
                </a>
              </div>


            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
    </div>

    <!-- book section -->
    <section class="book_section layout_padding">
      <div class="container">
        <div class="heading_container" style="padding-left: 520px; color: white;">
          <h2>
            Login
          </h2>
        </div>
        <div class="row" style="padding-left:380px">
          <div class="col-md-6">
            <div class="form_container">
              <form action="./conexao/include.php">
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Nome de Usuario" name="nomeUsuario"
                    id="nomeUsuario" required>
                </div>
                <div>
                  <input type="email" required="required" class="form-control" placeholder="Email" name="email"
                    id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                </div>

                <input type="password" class="form-control" placeholder="Senha" name="senha" id="senha" minlenght="8"
                  required>
                <div class="btn_box" style="padding-left: 90px;padding-top: 30px;">
                  <button>
                    Enviar
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end book section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contato
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Localização
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  noWaste@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              No Waste
            </a>
            <p>
              Do lado oposto ao desperdício, milhares de famílias não têm o que comer.
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>

              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>

            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By Equipe No Waste

        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>