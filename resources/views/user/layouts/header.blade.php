<div class="header-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 widget-header">
        <div class="header-widget-left">
          @if (Route::has('login'))
          @auth
          <a href="{{ url('/home') }}">Home</a>
          @else
          <button type="submit" class="btn btn-sm bg-info text-white" href="{{ route('login') }}">
            <a class="login-btn text-white" href="{{ route('login') }}">Login As Admin</a>
          </button>
                  @endauth
            @endif
        </div>
      </div>
      <div class="col-sm-4 widget-header">
        <div class="header-widget">
          <!-- <p>Connect with Us:</p> -->
          <ul>
            <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-square text-white" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square text-white" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square text-white" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus-square text-white" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram text-white" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img class="image-logo" src="{{url('assets/logo-jasera.png')}}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Beranda
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about-us')}}">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/list-product')}}">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/termandcondition')}}">Syarat dan Ketentuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/article')}}">Artikel</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
