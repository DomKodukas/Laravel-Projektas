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
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Registracija</a>
            </li>

            @endauth

            @endif

          </ul>
        </div>
      </div>
    </nav>
  </header>


  <div align="center" style="padding: 70px;">
      <table class="table">
          <thead class="thead-dark">
          <tr>
              <th scope="col">Gydytojo Vardas</th>
              <th scope="col">Data</th>
              <th scope="col">Zinute</th>
              <th scope="col">Statusas</th>
              <th scope="col">Veiksmai</th>
          </tr>
          </thead>

          @foreach($appoint as $appoints)

          <tbody>
          <tr>
              <td>{{$appoints->doctor}}</td>
              <td>{{$appoints->date}}</td>
              <td>{{$appoints->message}}</td>
              <td>{{$appoints->status}}</td>
              <td>
              <a href="{{url('cancel_appoint',$appoints->id)}}" class="btn btn-warning btn-sm" onclick="return confirm(&quot;Ar tikriai norite atsaukti?&quot;)">Atsaukti</a>
              </td>
          </tr>
          </tbody>

          @endforeach

      </table>
  </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>