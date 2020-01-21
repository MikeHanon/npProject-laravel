<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/09a3209f4f.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
      <!--bootstrap css-->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!--animate css-->
      <link rel="stylesheet" href="{{ asset('css/animate-wow.css') }}">
      <!--main css-->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
      <!--responsive css-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="" /> 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <form action ="index.php?action=search" method="GET" class="navbar-form navbar-left web-sh">
                        <div class="form">
                           <input type="hidden" name="action" value="search">
                           <input name="search" type="text" class="form-control" placeholder="">
                           <!-- <button name="btn-search" type="submit">chercher</button> -->
                        </div>
                     </form>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    category
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach( $obj['categories'] as $category)
                                   <a href="{{ route('categories', ['url'=>$category->url])}}" class="dropdown-item">{{ $category->title }}</a>
                                    @endforeach
                                 </div>
                              </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}">Votre Compte</a>
                                    <a class="dropdown-item" href="{{ route('cart.checkout') }}">Panier <span class="badge badge-light">{{ Cart::getTotalQuantity()}}</span></a>
                                    <div class="dropdown-divider"></div>
                                   
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('déconnexion') }}
                                    </a>
                                    @can('manage-users')
                                    <a href="{{route('admin.users.index')}}" class="dropdown-item"> Gestion Admin</a>
                                    @endcan

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 mb-4">
         
            @include('partials.alert')
          
            @yield('content')
          
        </main>
      
        <footer>
      <div class="main-footer">
         <div class="container">
            <div class="row">

               <div class="footer-link-box clearfix">
                  <div class="col-md-6 col-sm-6">
                     <div class="left-f-box">
                        <div class="col-sm-4">
                           <h2>Vendre sur E-artisanat</h2>
                           <ul>
                              <li><a href="index.php?action=register">Crer un compte</a></li>
                              <li><a href="index.php?action=faq">FAQ pour vendeur</a></li>
                           </ul>
                        </div>
                        <div class="col-sm-4">
                           <h2>Acheter sur E-artisanat</h2>
                           <ul>
                              <li><a href="index.php?action=register">Crer un compte</a></li>
                              <li><a href="index.php?action=faq">FAQ pour acheteur</a></li>
                           </ul>
                        </div>
                        <div class="col-sm-4">
                           <h2>COMPANY</h2>
                           <ul>
                              <li><a href="index.php?action=apropos">A propos de E-artisanat</a></li>
                              <li><a href="index.php?action=contact">Contactez-nous</a></li>

                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="right-f-box">
                        <h2>category</h2>
                        <ul class="col-sm-4">
                          <li> <a  href="index.php?action=category&id=1">Alimentation</a></li>
                          <li><a  href="index.php?action=category&id=2">Batiment</a></li>
                          <li> <a  href="index.php?action=category&id=3">Fabrication</a></li>
                          <li>  <a  href="index.php?action=category&id=4">Service</a></li>
                        </ul>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <p><img width="90" src="images/logo.png" alt="#" style="margin-top: -5px;" /> All Rights Reserved. Company Name © 2018</p>
               </div>
               <div class="col-md-4">
                  <ul class="list-inline socials">
                     <li>
                        <a href="">
                           <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                     </li>
                     <li>
                        <a href="">
                           <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                     </li>
                     <li>
                        <a href="">
                           <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                     </li>
                  </ul>
                  <!-- <ul class="right-flag">
                        <li><a href="#"><img src="images/flag.png" alt="" /> <span>Change</span></a></li>
                     </ul> -->
               </div>
            </div>
         </div>
      </div>
   </footer>
    </div>
    @yield('script')
</body>
</html>
