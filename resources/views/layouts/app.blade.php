<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Centro Mainini</title>
        <link rel="Shortcut Icon" href="{{asset('storage/logo-sin-fondo-2.png')}}" type="image/x-icon" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased" style="background-image:url({{asset('storage/fondo.png')}})">
      <nav class="navbar navbar-expand-lg navbar-light navBar">
        <a class="navbar-brand col-9 col-lg-5" href="#"><img src="{{ asset('storage/logo-sin-fondo-2.png') }}" id="logo-image" width="18%" alt=""></a>
        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-12 col-lg-7" id="navbarSupportedContent">
            <ul class="navbar-nav justify-content-around col-12 col-md-3 col-lg-12">
                <li class="nav-item">
                    <a class="nav-link" href="#especialidades">Especialidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#turno">Solicitar Turno</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ubicacion">Ubicacion</a>
                </li>
                <div class="row justify-content-around col-12 col-lg-4">
                    <li class="nav-item my-auto">
                        <a href=""><ion-icon name="logo-facebook" style="font-size: 1.5rem"></ion-icon></a>
                    </li>
                    <li class="nav-item my-auto">
                        <a href=""><ion-icon name="logo-instagram" style="color: #EB3C4D; font-size: 1.5rem"></ion-icon></a>
                    </li>
                    <li class="nav-item my-auto">
                        <a href=""><ion-icon name="logo-whatsapp" style="color: #2DAF1D; font-size: 1.5rem"></ion-icon></a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>
        @yield('content')
    </body>
    <script src="{{ asset('js/wsp.js') }}"></script>
</html>
