<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Agri-Visual </title>
        <link rel="stylesheet"  href="{{ asset('css/style.css') }}">
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--  Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <!-- Boxicon CDN lINK--> 
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body class="login bg-light">
        <!--NavBar-->
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="loginnavbar">
                <a class="navbar-brand ml-5" href="#">Agri-Visual</a> 
            </div>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style="color:black;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:black;">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2" href="#" style="color:black;">Reports</a>
                </li>
                <li class="nav-item">
                 
                <a class="nav-link mr-2 btn btn-outline-secondary mr-3" href="{{ route('user.login') }}" style="color:black;">Login</a>
                
              </li>
            </ul> 
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner border border-secondary mt-2  ">
    <div class="carousel-item active ">
      <img class="d-block w-100" src="/img/slide1.jpg" alt="First slide" style="height: 650px;">
      <div class="mask rgba-black-light"></div>
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="/img/slide2.jpg" alt="Second slide" style="height: 650px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/slide3.jpg" alt="Third slide" style="height: 650px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
       
        
    <script src="{{ asset('js/style.js') }}" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
