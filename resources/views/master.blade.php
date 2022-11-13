<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agri-Visual</title>
        <link rel="stylesheet"  href="{{ asset('css/style.css') }}">
            <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--  Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <!-- Boxicon CDN lINK--> 
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    
    </head>
    <body class="antialiased bg-light">
        <!--NavBar-->
        <!-- <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand ml-5" href="#">Agri-Visual</a>
               
            </div>
        </nav>-->
        <div class="topnav">
            <i class='bx bx-menu' id="btn" ></i>
                <!--<div class="topnav_img  mr-2 mb-2 mt-1 ">
                     <img src="/img/default.jpg" alt="user-image" class="img-size-20 rounded-circle mt-2 " height="30">
                     <small class="mt-2">Name</small>
                    
                </div>-->
        </div>
        <!--Sidebar -->
        <div class="sidebar">
            <div class="logo_content">
            <span class="proj_name mt-2">Agri-Visual</span>
                @if(Auth::user()->role == 'Manager')
                    <ul class="nav_list">
                        <li>
                            <a href="{{ route('user.home') }}">
                            <i class='bx bx-home' ></i>
                            <span class="links_name">Home</span>
                            </a>
                            <span class="tooltip">Home</span>
                        </li>
                        <li>
                            <a href="{{ route('user.analytics') }}">
                            <i class='bx bx-bar-chart-alt-2' ></i>
                            <span class="links_name">Analytics</span>
                            </a>
                            <span class="tooltip">Analytics</span>
                        </li>
                        <li>
                            <a href="{{ route('user.performance') }}">
                                <i class='bx bxs-cog'></i>
                            <span class="links_name">Performance</span>
                            </a>
                            <span class="tooltip">Performance</span>
                        </li>
                        <li>
                            <a href="{{ route('user.addregion') }}">
                            <i class='bx bx-map' ></i>
                            <span class="links_name">Region</span>
                            </a>
                            <span class="tooltip">Region</span>
                        </li>
                        <li>
                            <a href="{{ route('user.addproduce') }}">
                            <i class='bx bx-leaf' ></i>
                            <span class="links_name">Produce</span>
                            </a>
                            <span class="tooltip">Produce</span>
                        </li>
                        <li>
                            <a href="{{ route('user.addPopulation') }}">
                            <i class='bx bx-user'></i>
                            <span class="links_name">Population</span>
                            </a>
                            <span class="tooltip">Population</span>
                        </li>
                        <li>
                            <a href="{{ route('user.addProduction') }}">
                                <i class='bx bx-data'></i>
                            <span class="links_name">Production</span>
                            </a>
                            <span class="tooltip">Production</span>
                        </li>
                        <li>
                            <a href="{{ route('user.reports') }}">
                            <i class='bx bx-bar-chart' ></i>
                            <span class="links_name">Reports</span>
                            </a>
                            <span class="tooltip">Reports</span>
                        </li>
                        <li>
                            <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> 
                            <i class='bx bx-log-out' ></i>
                            <span class="links_name">Logout</span></a>
                            <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                            <span class="tooltip">Logout</span>
                        </li>
                    </ul>
                    @endif


                    @if(Auth::user()->role == 'Admin')
                    <ul class="nav_list">
                        <li>
                            <a href="{{ route('user.home') }}">
                            <i class='bx bx-home' ></i>
                            <span class="links_name">Home</span>
                            </a>
                            <span class="tooltip">Home</span>
                        </li>
                        <li>
                            <a href="{{ route('user.analytics') }}">
                            <i class='bx bx-bar-chart-alt-2' ></i>
                            <span class="links_name">Analytics</span>
                            </a>
                            <span class="tooltip">Analytics</span>
                        </li>
                        <li>
                            <a href="{{ route('user.performance') }}">
                                <i class='bx bxs-cog'></i>
                            <span class="links_name">Performance</span>
                            </a>
                            <span class="tooltip">Performance</span>
                        </li>
                        <li>
                            <a href="{{ route('user.addregion') }}">
                            <i class='bx bx-map' ></i>
                            <span class="links_name">Region</span>
                            </a>
                            <span class="tooltip">Region</span>
                        </li>
                        <li>
                            <a href="{{ route('user.addproduce') }}">
                            <i class='bx bx-leaf' ></i>
                            <span class="links_name">Produce</span>
                            </a>
                            <span class="tooltip">Produce</span>
                        </li>
                        <li>
                            <a href="{{ route('user.adduser') }}">
                            <i class='bx bx-user'></i>
                            <span class="links_name">Users</span>
                            </a>
                            <span class="tooltip">Users</span>
                        </li>
                        <li>
                            <a href="{{ route('user.addPopulation') }}">
                                <i class='bx bxs-city'></i>
                            <span class="links_name">Population</span>
                            </a>
                            <span class="tooltip">Population</span>
                        </li>
                        <li>
                            <a href="{{ route('user.addProduction') }}">
                                <i class='bx bx-data'></i>
                            <span class="links_name">Production</span>
                            </a>
                            <span class="tooltip">Production</span>
                        </li>
                        <li>
                            <a href="{{ route('user.reports') }}">
                            <i class='bx bx-bar-chart' ></i>
                            <span class="links_name">Reports</span>
                            </a>
                            <span class="tooltip">Reports</span>
                        </li>
                        <li>
                            <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> 
                            <i class='bx bx-log-out' ></i>
                            <span class="links_name">Logout</span></a>
                            <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                            <span class="tooltip">Logout</span>
                        </li>
                    
                    </ul>
                    @endif
            </div>
        </div>
      
        <div class="home_content">
           
            @yield('content')

        </div>
        @yield('script')
    <script src="{{ asset('js/style.js') }}" type="text/javascript"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    @yield('javascripts')
    </body>
</html>
