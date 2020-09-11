<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lexus</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/details.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/login_end_registration.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/new_car.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('site.home') }}">
                Lenus
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mr-sm-4 ">
                        <a class="nav-link" href="{{ route('site.home') }}">Home</a>
                    </li>
                    @if (!session()->exists('user_loged'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('site.registration') }}"><button class="btn btn-outline-info" >cadastro</button></a>
                        </li>

                    @endif
                    @if (session()->exists('user_loged'))
                        <li class="nav-item mr-sm-4">
                            <a class="nav-link" href="{{ route('site.newCar') }}">Novo Carro</a>
                        </li>
                        <li class="nav-item mr-sm-4">
                            <a class="nav-link" href="{{ route('site.getUser') }}?id={{ session('user_loged')->id }}">{{  session('user_loged')->user }}</a>
                        </li>
                        <li class="nav-item mr-sm-4">
                            <a class="nav-link" href="{{ route('site.logout') }}">Sair</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="navbar-fixed-bottom">
        &#169; 2020/{{ date('Y')}}. Todos os direitos reservados a : Clebson S.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/a35f1a6e09.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/carousels.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
