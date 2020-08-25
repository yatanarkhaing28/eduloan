<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

<<<<<<< HEAD
  {{-- form meta tag --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="colorlib.com">

  <title>Education Loan</title>

=======
<title>Education Loan</title>
>>>>>>> 9286ad19f89839ffa759c13973dc95d2373a6670
  <!-- Bootstrap core CSS -->
  <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('frontend/css/full-width-pics.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
<<<<<<< HEAD
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
=======
            <a class="nav-link" href="#">Services</a>
>>>>>>> 9286ad19f89839ffa759c13973dc95d2373a6670
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('index.create')}}">Form
              
            </a>
          </li>
          @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <a class="dropdown-item" href="{{ route('profilepage') }}">Profile</a>
                

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest


        </ul>
      </div>
    </div>
  </nav>
  @yield('sidebar')

<<<<<<< HEAD
  {{-- <div class="container contact py-4">
  <div class="row">
    <div class="col-md-3 px-5">
      <div class="row">
        <div class="col-md-3" style="color: #fe7f9c">
          <i class="fas fa-truck fa-2x"></i>

        </div>
        <div class="col-md-9">
          <h5>SERVICES</h5>
          <p class="text-justify">
            Choose us. We<br>
            deliver your order.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-3 px-5">
      <div class="row">
        <div class="col-md-3" style="color: #fe7f9c">
          <i class="fas fa-map-marker-alt fa-2x"></i>         
        </div>
        <div class="col-md-9">
          <a href="contact.html" class="text-decoration-none text-dark"><h5>ADDRESS</h5></a>
          <p class="text-justify">
            Corner of 32nd,80th <br>
            Mandalay, Myanmar
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-3 px-5">
      <div class="row">
        <div class="col-md-3" style="color: #fe7f9c">
          <i class="far fa-clock fa-2x"></i>

        </div>
        <div class="col-md-9">  
          <h5>OFFICE HOUR</h5>
          <p class="text-justify">
            Mon-Fri:9AM-9 PM<br>
            Sat-Sun:9 AM-4 PM<br>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-3 px-5">
      <div class="row">
        <div class="col-md-3" style="color: #fe7f9c">
          <i class="far fa-envelope-open fa-2x"></i>
        </div>
        <div class="col-md-9">
          <a href="contact.html" class="text-decoration-none text-dark"><h5>CONTACT US</h5></a>
          <p class="text-justify">
            +959969514343<br>

          </p>
        </div>
      </div>
    </div>

  </div>
</div> --}}

  <!-- Footer -->
  <footer class="py-5 bg-black fixed-bottom ">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Bright</p>
=======
  <!-- Header - set the background image for the header in the line below -->
   @yield('content')

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
>>>>>>> 9286ad19f89839ffa759c13973dc95d2373a6670
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
