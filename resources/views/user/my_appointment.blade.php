<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>SURAKSHA | Home</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +01686901810</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> suraksha@nsu.edu</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">SURAKSHA E-Health Care</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            
            @if(Route::has('login'))
            @auth
            <li class="nav-item">
              <a class="nav-link"  style="background-color:#146356; color:white"  href="{{url('myappointment')}}">My Appointment</a>
            </li>

            <x-app-layout>  

            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register </a>
            </li>

            @endauth
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

             <div align="center" style="padding:70px">
                    <table>
                            <tr style="background-color:#1A374D">
                                <th style="padding:10px; font-size:20px; color:white">Doctor Name</th>
                                <th style="padding:10px; font-size:20px; color:white">Date</th>
                                <th style="padding:10px; font-size:20px; color:white">Message</th>
                                <th style="padding:10px; font-size:20px; color:white">Status</th>
                                <th style="padding:10px; font-size:20px; color:white">Cancel Appointment</th>
                            </tr>
                            @foreach($appoint as $appoints)
                            <tr style="background-color:#7CD1B8" align="center">
                                <td style="padding:10px; font-size:15px;color:#041C32">{{$appoints->doctor}}</td>
                                <td style="padding:10px; font-size:15px;color:#041C32">{{$appoints->date}}</td>
                                <td style="padding:10px; font-size:15px;color:#041C32">{{$appoints->message}}</td>
                                <td style="padding:10px; font-size:15px;color:#041C32">{{$appoints->status}}</td>
                                <td><a class="bt btn-danger" onclick="return confirm('Are You Sure to Cancel Appointment?')"href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>
                            </tr>
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