<?php 
include ('conexao/protect.php');
require_once('conexao/conexao.php')
?>
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

  <title> No Waste </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>

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

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
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
                <a class="nav-link" href="quemsomos.html">Quem somos</a>
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
  <!-- slider section-->
  <section class="section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="left-text-content">
              <div class="thumb">
                <img 
                  src="https://cdn.pixabay.com/photo/2019/08/11/18/59/icon-4399701_960_720.png"
                  style=" height: 300px;width: 300px; border-radius: 10px 10px 10px 10px;" alt="">
              </div>
            <div class="row">
              
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="right-content">
            <div class="section-heading">
              <h2>Nome Da Entidade</h2>
            </div>
            <p style="padding-top: 20px;">Klassy Cafe is one of the best <a href="https://templatemo.com/tag/restaurant" target="_blank"
                rel="sponsored">restaurant HTML templates</a> with Bootstrap v4.5.2 CSS framework. You can download and
              feel free to use this website template layout for your restaurant business. You are allowed to use this
              template for commercial purposes. <br><br>
              You are NOT allowed to redistribute the template ZIP file on any
              template donwnload website.<a href="https://templatemo.com/tag/restaurant" target="_blank"
              rel="sponsored">restaurant HTML templates</a> Please contact us for more information.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section-->

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Entidades
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*"></li>
      </ul>

<?php      
$select_entidade = "SELECT id_ent, nome_ent, CNPJ, email, nome_usuario FROM entidade ";
$retorno_select_ent = mysqli_query($conexao,$select_entidade);

// Select pra trazer todos os dados da igreja do banco pra página. Ainda não tá funcionando pq falta configurar o banco
// "SELECT 
//   e.id_ent, e.nome_ent, e.CNPJ, e.email, e.nome_usuario, d.numero, d.bairro, d.tipoLogradouro, d.nomeLogradouro, d.complemento, d.estado, d.cidade, d.cep, c.nome_contato, c.email, c.telefone, c.whatsapp, c.rede_social  
// FROM 
//   entidade e
// INNER JOIN
//   endereco d
// ON
//   d.id_endereco_entidade = e.id_ent
// INNER JOIN
//   contato c 
// ON
//   c.id_contato = e.id_ent;"; 
  
while($linha = mysqli_fetch_assoc($retorno_select_ent)){
  $id_ent = $linha['id_igreja'];
  $nome_entidade = $linha['nome_ent'];
  $cnpj = $linha['CNPJ'];
  $email = $linha['email'];
  $nome_usuario = $linha['nome_usuario'];



echo '

<div class="filters-content">
        <div class="row grid">
        <div class="col-sm-6 col-lg-4 all ">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/o2.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>'.
                    $nome_entidade
                  .'</h5>
                  <p>
                    Contato: *******<br>
                    Email: '.$email.'
                  </p>
                  <div class="options">

                  </div>
                  <!-- Button trigger modal -->
                  <button id="'.$id_ent.'" type="button" class="btn btn-secondary d-grid gap-2 col-6 mx-auto"
                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                    onclick="document.getElementById('.'id-igreja'.').value=this.id">
                    Doar
                  </button>
                </div>
              </div>
            </div>
          </div>


                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Formulário</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="form_container">

                            <form method="POST" action="adicionar_doacao.php">
                              <div class="form-group">
                                <label for="qtde_marmita">Defina a quantidade de marmitas a serem doadas</label>
                                <input type="number" class="form-control" name="qtde_marmita" id="qtde_marmita"
                                  required>
                              </div><br>

                              <label for="validade" style="padding: 10px;">Validade</label>
                              <select class="form-select">
                                <option selected>Selecione</option>
                                <option name="validade">Menos de 24h</option>
                                <option name="validade">Aproximadamente 24h</option>
                                <option name="validade">
                                  Entre 24h e 48h</option>
                              </select>
                              
                              <div class="form-group"><br>
                                <label for="descricao" style="padding-top: 15px;">Descrição</label>
                                <div class="form-floating"><textarea class="form-control"
                                    placeholder="Insira uma descrição sobre a doação das marmitas aqui..."
                                    name="descricao" id="floatingTextarea2" style="height: 100px"></textarea>
                                </div>
                              </div>
                              <input type="hidden" name="id-igreja" id="id-igreja">
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary" name="salvarDoacao"
                                  id="salvarDoacao">Fazer
                                  Doação</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>';
}

?>

        <div class="btn-box">
          <a href="">
            Veja Mais
          </a>
        </div>
      </div>
  </section>

  <!-- end food section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
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
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Feane
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
              words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
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
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
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