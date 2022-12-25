<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="IMG/DSIcon.png">
    <title>Sociedade Jedi</title>
</head>
<!-- container do topo -->
    <body class="body">
        
        <div class="container">
            <header>
        <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
<!-- Logo Tipo -->
        <img width="30%" src="IMG/SocJediLogo.png" alt="LogoTipo">
<!-- Nav Bar -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link text-light active " aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="#">Contato</a>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Topicos
            </a>
            <ul class="dropdown-menu bg-secondary">
                <li><a class="dropdown-item" href="#">Imperio</a></li>
                <li><a class="dropdown-item" href="#">Mandalore</a></li>
                <li><a class="dropdown-item" href="#">Republica</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Filmes</a></li>
            </ul>
            </li>

            <li class="nav-item">
            <a class="nav-link text-light disabled">Disabled</a>
            </li>
        </ul>
<!-- Barra de pesquisa -->
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
        </nav>
            </header>
        </div>
<!-- Inicio do carrosel -->
        <div class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img width="100%" height="30%" src="IMG/atat em hoth.jpg" class="d-block" alt="ATAT no planeta Hoth">
    </div>
    <div class="carousel-item">
      <img width="100%" height="30%" src="IMG/destroier destruido.jpg" class="d-block" alt="destroierEP7">
    </div>
    <div class="carousel-item">
      <img width="100%" height="30%" src="IMG/jedo figth.jpg" class="d-block" alt="jedi vs monstro">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
        </div>
<!-- Fim do carrosel -->
<!-- Meio do site -->
<!-- destaques -->
  <div class="bg-secondary text-warning text-center mt-1">
    <h2>Destaques</h2>
  </div>
<!-- Posts em destaques -->
  <div class="container text-center">
  <div class="row">
    <div class="col">
      <span class="border">
      <div class="card" style="width: 18rem;">
        <img src="IMG/santaseiawars.jpg" class="card-img-top" alt="Feriados e comemorações em SW">
        <div class="card-body">
          <p class="card-text">A Estrela da Morte não é <br> apenas um símbolo do <br> Império, mas como um <br> dos elementos mais importantes de Star Wars.</p>
        </div>
      </div></span>
    </div>

    <div class="col">
      <span class="border">
      <div class="card" style="width: 18rem;">
        <img src="IMG/santaseiawars.jpg" class="card-img-top" alt="Feriados e comemorações em SW">
        <div class="card-body">
          <p class="card-text">A Estrela da Morte não é apenas um símbolo do Império, mas como um dos elementos mais importantes de Star Wars.</p>
        </div>
      </div></span>
      </div>
    
    <div class="col">
      <span class="border">
      <div class="card" style="width: 18rem;">
        <img src="IMG/santaseiawars.jpg" class="card-img-top" alt="Feriados e comemorações em SW">
        <div class="card-body">
          <p class="card-text">A Estrela da Morte não é apenas um símbolo do Império, mas como um dos elementos mais importantes de Star Wars.</p>
        </div>
      </div></span>
      
    </div>
  </div>
  </div>

<!-- conteudo -->
  <div class="bg-secondary text-warning text-center mt-1">
    <h2>Conteudo</h2>
  </div>

<!-- conteudo comum -->
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <span class="border">
        <div class="card" style="width: 18rem;">
          <img src="IMG/santaseiawars.jpg" class="card-img-top" alt="Feriados e comemorações em SW">
          <div class="card-body">
            <p class="card-text">A Estrela da Morte não é <br> apenas um símbolo do <br> Império, mas como um <br> dos elementos mais importantes de Star Wars.</p>
          </div>
        </div></span>
      </div>

      <div class="col">
        <span class="border">
        <div class="card" style="width: 18rem;">
          <img src="IMG/santaseiawars.jpg" class="card-img-top" alt="Feriados e comemorações em SW">
          <div class="card-body">
            <p class="card-text">A Estrela da Morte não é apenas um símbolo do Império, mas como um dos elementos mais importantes de Star Wars.</p>
          </div>
        </div></span>
        </div>
      
      <div class="col">
        <span class="border">
        <div class="card" style="width: 18rem;">
          <img src="IMG/santaseiawars.jpg" class="card-img-top" alt="Feriados e comemorações em SW">
          <div class="card-body">
            <p class="card-text">A Estrela da Morte não é apenas um símbolo do Império, mas como um dos elementos mais importantes de Star Wars.</p>
          </div>
        </div></span>
        
      </div>
    </div>
    </div>

<!-- footer -->

  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->

      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" class="form-control" />
                <label class="form-label" for="form5Example21">Email address</label>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->

      <!-- Section: Text -->
      <section class="mb-4">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
          repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
          eum harum corrupti dicta, aliquam sequi voluptate quas.
        </p>
      </section>
      <!-- Section: Text -->

      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>


    </body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script src="https://i2.wp.com/s-media-cache-ak0.pinimg.com/originals/4e/85/b0/4e85b0db3e3cf45139fbfbe6847b8ff6.gif" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>

                                                <!-- dropdonw-alternativo -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav> -->