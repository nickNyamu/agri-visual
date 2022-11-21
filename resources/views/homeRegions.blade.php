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
                    <a class="nav-link" href="{{ route('hRegions') }}" style="color:black;">Regions</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('hProduction') }}" style="color:rgb(112, 112, 112);">Production</a>
            </ul> 
        </nav>

<div class="col-lg-8" >
    <h5>Regions in the system</h5>
<div  class="card-body table-responsive " style="height: 630px;">
    <table class="table table-head-fixed text-nowrap"> 
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Region Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      @foreach ($regions as $region)
          <tbody>
              <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $region->county }}</td>
                  <td><a href="{{ "hRegions/".$region['id'] }}" class="btn btn-warning"><i class="fa fa-pencil">Region Detailed Production</i></a></td>
              </tr>
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