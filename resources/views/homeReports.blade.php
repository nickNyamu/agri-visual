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
                  <a class="nav-link" href="{{ route('hProduction') }}" style="color:rgb(112, 112, 112);">Production</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('hRegions') }}" style="color:rgb(112, 112, 112);">Regions</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link mr-2" href=" " style="color:black;">Reports</a>
                </li>
                {{-- <li class="nav-item">
                 
                <a class="nav-link mr-2 btn btn-outline-secondary mr-3" href="{{ route('user.login') }}" style="color:black;">Login</a>
                
              </li> --}}
            </ul> 
        </nav>
        <h5 class="ml-3 mt-3">Detailed Data for {{ $produce->name }}</h5>

        <div>      
            <ul class="user nav ml-3 mt-3">
              <div>
                <li class="nav-item">
                  <a class="nav-link " href="{{ route('hProduction') }}">Back</a>
                </li>
              </div>
            </ul>
        </div>

        <div class="row mt-3">
            <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                           <h5 class="card-title">{{ $produce->name }} Production Quantity Chart</h5>
            
                           <div class="card-body">
                              <div class="position-relative" id="barChart">
                                 {!! $chart4->container() !!}
                                 {!! $chart4->script() !!}
                              </div>
                           </div>
                        </div>
                     </div>
                </div>
    
                <div class="col-lg-6">
                <div  class="card-body table-responsive " style="height: 280px;">
                    <table class="table table-head-fixed text-nowrap"> 
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Produced Quantity(kgs)</th>
                            <th>Required Quantity(kgs)</th>
                            <th>Deficit/Surplus</th>
                        </tr>
                    </thead>
                    
                    <tbody> 
                        <td>2022</td>
                        <td>{{  number_format(floatval($productions22)) }}</td>   
                        <td>{{ number_format(floatval($produce->description * $year4Sum * 130)) }}</td>
                        <td>{{ number_format(floatval($productions22 -  $produce->description * $year4Sum * 130)) }}</td>
                    </tbody>
                    <tbody> 
                        <td>2021</td>
                        <td>{{  number_format(floatval($productions21)) }}</td>   
                        <td>{{ number_format(floatval($produce->description * $year3Sum * 130))}}</td>
                        <td>{{ number_format(floatval($productions21 -  $produce->description * $year3Sum * 130))}}</td>
                    </tbody>
                    <tbody> 
                        <td>2020</td>
                        <td>{{  number_format(floatval($productions20)) }}</td>   
                        <td>{{ number_format(floatval($produce->description * $year2Sum * 130))}}</td>
                        <td>{{ number_format(floatval($productions20 -  $produce->description * $year2Sum * 130))}}</td>
                    </tbody>
                    <tbody> 
                        <td>2019</td>
                        <td>{{  number_format(floatval($productions19)) }}</td>   
                        <td>{{ number_format(floatval($produce->description * $year1Sum * 130))}}</td>
                        <td>{{ number_format(floatval($productions19 -  $produce->description * $year1Sum * 130))}}</td>
                    </tbody>
                </table>
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>          
    <script src="{{ asset('js/style.js') }}" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
