<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel = "icon" href ="../assets/img/sirdute.png" type = "image/x-icon">

  <title>Viena-Gyvybe Dominykas Pugacius IST20</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +370 67878 553</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> dominykas.pugacius@stud.svako.lt</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://www.facebook.com/dominykas.pugacius/"><span class="mai-logo-facebook-f"></span></a>
              <a href="https://www.instagram.com/dominykas.p/"><span class="mai-logo-instagram"></span></a>
              <a href="https://www.youtube.com/channel/UCzb9nB6yJvWaGragOlohUEg"><span class="mai-logo-youtube"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('home')}}"><span class="text-primary">Viena</span>-Gyvybe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('home')}}">Pagrindinis</a>
            </li>
            
            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link" href="{{url('myappointment')}}">Mano susitikimai</a>
            </li>

            <x-app-layout>
            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Prisijungti</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Registruotis</a>
            </li>

            @endauth

            @endif

          </ul>
        </div>
      </div>
    </nav>
  </header>

        @if(session()->has('message'))
        <div class="alert alert-success">
        <button type="button" type="close" data-dismiss="alert">x</button>  
        {{session()->get('message')}}
        </div>
        @endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Padarykime jusu gyvenima laimingesni</span>
        <h1 class="display-4">Sveika gyvensena</h1>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Susirasinekite</span> su gydytojais</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Uztikrinta</span>  Apsauga</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Lengvas</span> Pasirinkimas</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Sveiki atvyke i savo sveikatos <br> Centra</h1>
            <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('user.doctor')

  @include('user.appointment')

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Kontaktai</h5>
          <a href="https://www.facebook.com/dominykas.pugacius/" class="footer-link">+370 67878 553</a>
          <a href="https://www.facebook.com/dominykas.pugacius/" class="footer-link">dominykas.pugacius@stud.svako.lt</a>
          <div class="footer-sosmed mt-3">
          <a href="https://www.facebook.com/dominykas.pugacius/" target="_blank"><span class="mai-logo-facebook-f"></span></a>
          <a href="https://www.instagram.com/dominykas.p/" target="_blank"><span class="mai-logo-instagram"></span></a>
          <a href="https://www.youtube.com/channel/UCzb9nB6yJvWaGragOlohUEg" target="_blank"><span class="mai-logo-youtube"></span></a>
        </div>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5></h5>
          <ul class="footer-menu">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5></h5>
          <ul class="footer-menu">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5></h5>
          <a href="#" class="footer-link"></a>
          <a href="#" class="footer-link"></a>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2022 <a href="https://www.facebook.com/dominykas.pugacius" target="_blank">Dominykas Pugacius IST20</a>. Visos teises saugomos</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>