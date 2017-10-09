<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



        <link rel="stylesheet" href="/css/normalize.css"> <!-- Appel Normalize -->
        <link rel="stylesheet" href="/css/bootstrap.min.css"> <!-- Appel Bootstrap -->
        <link rel="stylesheet" href="/css/style.css"> <!-- Appel du CSS personnel -->
        <!-- FONT -->
        <link href="#" rel="stylesheet">
        <!-- meta -->
        <meta name="decription" content="">
        <meta name="author" content="">
        <!-- icône -->
        <link rel="shortcut icon" href="/images/favicon.png">
        <!-- polices -->
        <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
        <!-- favicon -->
        <link rel="icon" type="image/png" href="images/favicon1.ico" />



    <title>{{-- {{ config('app.name', 'Watizit') }} --}}Watizit</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="body">
    <div id="app">
        <nav class="header navbar-haut navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-ju" href="{{ url('/') }}">
                        {{-- {{ config('app.name', 'Watizit') }} --}}
                        Watizit
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="zorogauche"><a href="{{ url('/login') }}">Se connecter</a></li>
                            <li class="zorodroite"><a href="{{ url('/register') }}">S'inscrire</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Se déconnecter
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav> 

        @yield('content')

        <footer id="footer-index">
        <div class="container-fluide footer-fluid">
            <div class="container footer-content">
                <ul>
                    <li><a href="/apropos">A propos</a></li>
                    <li><a href="/faq">F.A.Q</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/conditions">Conditions d'utilisations</a></li>
                </ul>
            </div>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
