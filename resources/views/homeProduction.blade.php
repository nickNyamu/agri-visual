<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title style="color:black;"> Agri-Visual </title>
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
                <a class="navbar-brand ml-5" href="">Agri-Visual</a> 
            </div>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/" style="color:rgb(112, 112, 112);">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hProduces') }}" style="color:rgb(112, 112, 112);">Produces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hRegions') }}" style="color:rgb(112, 112, 112);">Regions</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('hProduction') }}" style="color:black;">Production</a>
            </ul> 
        </nav>
<div class="row mt-2 ml-4">
    <h5>Production Level</h5>
</div>
<div class="row mt-2">
    <div class="col-lg-12" style="padding: 0 60px 0 60px;">
        <p>Kenya is broadly self sufficient in major food items except in drought years. 
            Chronic vulnerability to drought is concentrated in the ASAL areas.
             Up to 5 million people in these areas are vulnerable and require humanitarian assistance from time to time. Special attention is given to these areas in terms of specific projects, which include provision of water for domestic use and for livestock and preservation of traditional drought management systems, 
             in addition to the utilization of drought-tolerant crop varieties and rearing of drought
              –adapted livestock breeds.</p>
    </div>
    <h5 class="ml-5">Detailed Production Quantity</h5>

    <div class="row ml-5"> 
        <div class="col-9 mt-3">
            <div  class="card-body table-responsive " style="height: 480px;">
                <table class="table table-head-fixed text-nowrap"> 
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Produce</th>
                        <th>Action</th>
                    </tr>
                </thead>
      @foreach ($produces as $produce)
                <tbody> 
                    <td>{{ ++$i }}</td>
                    <td>{{ $produce->name }}</td>   
                    
                      
                    <td><a href="{{ "hProduction/".$produce['id'] }}" class="btn btn-warning"><i class="fa fa-pencil">View Detailed Data</i></a></td>
                        
                </tbody>
      @endforeach
            </table>
            </div>
        </div>
        </div>  
    </div>
               
    <script src="{{ asset('js/style.js') }}" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
