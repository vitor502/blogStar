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

<body class="body">
<!-- container do topo -->       
        <div class="container">
            <header>
        <nav class="navbar navbar-expand-lg">
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
                Tópicos
            </a>
            <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item bg-dark" href="#">Imperio</a></li>
                <li><a class="dropdown-item bg-dark" href="#">Mandalore</a></li>
                <li><a class="dropdown-item bg-dark" href="#">Republica</a></li>
                <li><hr class="dropdown-divider bg-dark"></li>
                <li><a class="dropdown-item bg-dark" href="#">Filmes</a></li>
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
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img width="90%" class="d-block mx-auto" src="IMG/atat em hoth.jpg" alt="First slide">
      </div>
    </div>
  </div>
  <!-- Fim do carrosel -->
<!-- Meio do site -->
<!-- destaques -->
  <div class="text-warning text-center mt-1 p-2 mx-auto">
    <h2><em>- Destaques -</em></h2>
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
        <img src="IMG/caçavader.jpg" class="card-img-top" alt="Vader com caçadores de recompensa">
        <div class="card-body">
          <p class="card-text">Na Era do Império Galáctico, muitos caçadores de recompensas eram afiliados com a Guilda dos Caçadores de Recompensas.</p>
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
  <div class="text-warning text-center mt-1 p-2 mx-auto">
    <h2><em>- Conteúdo -</em></h2>
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
      <!-- Section: Midias Sociais -->
      <section class="mb-4">

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          >Twitter<i class="fab fa-twitter"></i
        ></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          >Instagram<i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          >Linkedin<i class="fab fa-linkedin-in"></i
        ></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          >Github<i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Midias Sociais -->

      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Se inscreva</strong>
              </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" class="form-control" />
                <label class="form-label" for="form5Example21">Adicione seu E-mail</label>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
                Inscreva-se
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
          A capacidade de falar não torna você inteligente. <br>
          Acesse minhas redes para ajudalo, que a força esteja com você.
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
      <a class="text-white" href="http://localhost/blogStar/index.php">SociedadeJedi.com</a>
    </div>
    <!-- Copyright -->
  </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script src="https://i2.wp.com/s-media-cache-ak0.pinimg.com/originals/4e/85/b0/4e85b0db3e3cf45139fbfbe6847b8ff6.gif" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
