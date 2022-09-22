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
        </nav>
    <!--Form-->
        <div class="container-fluid d-flex justify-content-center position-center bottom-50 mt-5 ">
        <div class="col-4 col-lg-4 ">
            <div class="card px-0 pb-0 shadow p-3 rounded">
                <div class="justify-content-center d-flex">
                    <h3 class="display-6 ">Login</h3>
                </div>
                <form action="{{ route ('user.check') }}" class="mt-4" method="POST">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                    
                    <div class="form-group">
                        <div class="mb-3 col-12">
                            <label for="InputEmail" class="form-label">Email address:</label>
                            <!--<span class="input-group-prepend"><i class="input-group-text fa fa-user" aria-hidden="true"></i></span>-->
                            <input type="text" class="form-control input-lg " name="email" placeholder="example@email.com" value="{{ old ('email')}}">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3 col-12">
                            <label for="InputPassword" class="form-label">Password:</label>
                            <!--<span class="input-group-prepend"><i class="input-group-text fa fa-lock" aria-hidden="true"></i></span>-->
                            <input type="password" class="form-control input-lg" name="password" placeholder="Password" value="{{ old ('password')}}">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span> 
                        </div>
                    </div>

                    <div class="form-group justify-content-center col-9 mt-3">
                        <button type="submit" class="btn btn-primary"> Login </button>
                    </div>

                    <div class="pull-right mr-2 mb-2">
                        <a href="{{ asset('/') }}" class="text-warning">
                            <small>Home</small>
                        </a>
                    </div>
                   
                </form>

            </div>
        </div>
    </div>
        
       
        
    <script src="{{ asset('js/style.js') }}" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
