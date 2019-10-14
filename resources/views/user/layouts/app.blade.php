<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rental Kamera</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{url ('css/user/header.css')}}">
        <link rel="stylesheet" href="{{url ('css/user/home.css')}}" >
        <link rel="stylesheet" href="{{url ('css/user/about.css')}}">
        <link rel="stylesheet" href="{{url ('css/user/product.css')}}">
        <link rel="stylesheet" href="{{url ('css/user/article.css')}}">
        <link rel="stylesheet" href="{{url ('css/user/footer.css')}}">
        <link rel="stylesheet" href="{{url ('css/user/tac.css')}}">
        <link rel="stylesheet" href="{{url ('css/user/booking.css')}}">
        <!-- Styles -->
        <style>
            html, body {
              background-color: #fff;
              color: #636b6f;
              font-family: 'Nunito', sans-serif;
              font-weight: 200;
              height: 100vh;
              margin: 0;
            }
            .full-height {
              height: 100vh;
            }
            .flex-center {
              align-items: center;
              display: flex;
              justify-content: center;
            }
            .position-ref {
              position: relative;
            }
            .top-right {
              position: absolute;
              right: 10px;
              top: 18px;
            }
        </style>
    </head>
    <body>
    <header>
      @include('user.layouts.header')
    </header>
      @yield('content')
    <footer>
      @include('user.layouts.footer')
    </footer>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script>
      $(document).ready(function(){
        $(".nav-tabs a").click(function(){
          $(this).tab('show');
        });
      });
      </script>

    </body>
</html>
