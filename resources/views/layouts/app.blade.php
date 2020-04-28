<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/home">CatalogoLaravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/catalogo">Products</a>
                </li>
                
                
                
            </ul>

            <ul class="navbar-nav ml-auto">
                @if(!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <p style="margin-right:20px;" class="nav navbar-text">Welcome, {{Auth::user()['name']}}</p>
                    </li>
                    <li class="nav-item">
                        <form id="logout_form" action="{{route('logout')}}" method="POST">
                            @csrf
                            <a class="nav-link" href="javascript:$('#logout_form').submit();">Logout</a>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

    @yield('content')
</body>
</html>