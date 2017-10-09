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
       
        <!-- meta -->
        <meta name="decription" content="">
        <meta name="author" content="">

        <!-- icône -->
         <link rel="icon" type="image/png" href="images/favicon1.ico" />


        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  <!-- appel css date picker  -->
       <!--  <link rel="stylesheet" href="/resources/demos/style.css"> -->

    <title>{{-- {{ config('app.name', 'Laravel') }} --}}Watizit</title>

    <!-- Styles -->
   <!--  <link href="/css/app.css" rel="stylesheet"> -->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img class="logo" src="../images/logo.png">
                    </a>
                </div>
                <div class="collapse navbar-collapse auth-laravel" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
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
                                            Déconnexion
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

                 
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 menu-lateral-left"><!-- Menu latéral gauche -->
            <div class="container-fluid menu-nav">
               
                <a class="lien_photo" href="/profil">
                  <img src="{{ Auth::user()->url_photo_profil }}" class="photo-profil" height="100%" alt="photo de profil"/>
                </a>
              
              
              <h2>Bonjour, {{ Auth::user()->name }}</h2>
              <hr class="trait">
              
              <ul class="navigation">
                <li><a href="/home"><span class="glyphicon glyphicon-home"></span>    ACCUEIL</a></li>
                <li><a href="/profil"><span class="glyphicon glyphicon-user"></span>    MON PROFIL</a></li>
                <li><a href="/friend"><span class="glyphicon glyphicon-comment"></span>    MES AMIS</a></li>
                <li><a href="/messagerie"><span class="glyphicon glyphicon-envelope"></span>    MESSAGERIE</a></li>
                <li><a href="/rubriques"><span class="glyphicon glyphicon-folder-open"></span>    RUBRIQUES</a></li>
              </ul>
              <h2>Mes groupes</h2>
              <hr class="trait">
              <ul>
               <li><a href="/creation_groupe" class="creation_groupe_button"><span class="glyphicon glyphicon-plus"></span> Créer un groupe</a></li>

                @foreach( Auth::user()->groups as $group )

                  <li><a href="/groupe/{{ $group->id }}">{{ $group->name }}</a></li>

                @endforeach
              </ul>  

          </div><!-- /.container-fluid -->
        <div class="container-fluid contact-favoris">
          <h2>Mes contacts</h2>
          <hr class="trait">           
          <div class="list-group">  
        @foreach(Auth::user()->friends1 as $friend1) 

          <a href="#" class="list-group-item"><img src="{{ $friend1->user2->url_photo_profil }}" class="img-circle" width="50" height="50" alt="avatar contact">{{ $friend1->user2->name }}</a>
        
        @endforeach
        @foreach(Auth::user()->friends2 as $friend2)

          <a href="#" class="list-group-item"><img src="{{ $friend2->user1->url_photo_profil }}" class="img-circle" width="50" height="50" alt="avatar contact">{{ $friend2->user1->name }}</a>      
        
        @endforeach 
        
            
            
          </div>
        </div>
      </div>
     <!-- Fin menu latéral gauche -->
</div>


        @yield('content')
    


    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> <!-- Div morte (Div note) -->
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 menu-lateral-right"> <!-- Menu latéral droite -->
          <!-- Appel twitter -->
         <h2>Les derniers tweet</h2>
         <hr class="trait">
          <a class="twitter-timeline"  href="https://twitter.com/search?q=%40DigitalGrenoble" data-widget-id="790492483817996288">Tweets sur @DigitalGrenoble</a>
           <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
           </script>
            
          
    <!-- Scripts -->
    <script src="/js/app.js"></script>

      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>    <!-- appele script datepicker + fonction -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>

        var datePickerOptions = {
                    dateFormat: "yy-mm-dd",
                    dayNamesMin: ["Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa"],
                    firstDay: 1,
                    yearRange: "1900:2016",
                    changeMonth:true,
                    changeYear:true,
                    monthNames: [ "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre" ]
                    };

        $(function() {
            $ ("#datepicker").datepicker(datePickerOptions);
            
        });
    </script>

</body>
</html>










