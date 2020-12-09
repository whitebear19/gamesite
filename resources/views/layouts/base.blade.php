<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/accordian.css') }}">    
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/slick/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/slick/slick-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/slick.css') }}">
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>   
    <script src="{{ asset('public/assets/js/accordian.js') }}"></script>       
    <script src="{{ asset('public/assets/js/slick.js') }}"></script>   
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>   
    <script src="{{ asset('public/assets/js/autosize.js') }}"></script>   
    <script src="https://kit.fontawesome.com/38c20fcb98.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <title>{{ config('app.name', 'Game') }}</title>
</head>
<body>     
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="/">
            <img class="site_logo" src="{{asset('public/assets/img/logo.png')}}" alt="">
        </a>
        <button class="btn_mobile_menu btn_transparent" type="button"  data-toggle="modal" data-target="#mobileMenu">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if($page == "home") selected_menu @endif">
                    <a class="nav-link" href="/">Home </a>
                </li>                
                <li class="nav-item @if($page == "ioasis") selected_menu @endif">
                    <a class="nav-link" href="{{ route('ioasis') }}">I-OASIS </a>
                </li>
                <li class="nav-item @if($page == "games") selected_menu @endif">
                    <a class="nav-link" href="{{ route('games') }}">Serious Games</a>
                </li> 
                <li class="nav-item @if($page == "videos") selected_menu @endif">
                    <a class="nav-link" target="blank" href="#">VIDEOS</a>
                </li>   
                @auth
                    @if (Auth::user()->role == "1" && !empty(Auth::user()->email_verified_at)) 
                        <li class="nav-item @if($page == "library") selected_menu @endif">
                            <a class="nav-link" href="{{ route('library') }}">LIBRARY</a>
                        </li>     
                    @endif                    
                @endauth   
                     
            </ul>   
            <div class="pos_rel">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn_transparent" type="button"><i class="fas fa-search"></i></button>
                </form>
            </div>     
            <div>                
                <ul class="navbar-nav mr-auto">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Sign In <span class="sr-only">(current)</span></a>
                    </li>
                    @else  
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                @if (Auth::user()->role == "2") 
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                        {{ __('Dashboard') }}
                                    </a>
                                @endif

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest                
                </ul>
            <div>
        </div>
    </nav>
    
    <main class="">
        @yield('content')
    </main>
    <footer class="py-40">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <form action="">
                            <div class="contactus">                           
                                <div class="contactus_title">
                                    <p class="fs-30">Contact Us</p>
                                </div>
                                <div class="contactus_body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your name">
                                    </div>
                                    <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Your Email">
                                     </div>
                                     <div class="form-group">
                                         <textarea type="text" class="form-control" rows="5" placeholder="Your message"></textarea>
                                     </div>
                                     <div class="form-group text-center">
                                         <button type="button" class="btn_contactus">Submit</button>
                                     </div>
                                </div>
                            </div>
                        </form>                      
                    </div>
                </div>
               
                <div class="col-md-4">
                    <div class="text-center">
                        <label for="" class="fs-30">
                            Follow us on
                        </label>
                        <ul class="footer_follows">
                            <li>
                                <a target="blank" href="https://www.facebook.com/I-Oasis-103445604916242"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            
                            <li>
                                <a target="blank" href="https://www.instagram.com/ioasis_/?hl=fr"><i class="fab fa-instagram"></i></a>
                            </li>  
                            <li>
                                <a target="blank" href="https://twitter.com/IOasis5"><i class="fab fa-twitter-square"></i></a>
                            </li>
                            <li>
                                <a target="blank" href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a target="blank" href="https://www.linkedin.com/in/i-oasis-2564101ba/"><i class="fab fa-linkedin"></i></a>
                            </li>                     
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <label for="" class="text-white"><b>LANGUAGE</b></label>
                        <select name="" class="sel_language" id="">
                            <option value="">English</option>
                            <option value="">French</option>
                        </select>
                    </div>
                    <div class="text-center mt-resp">
                        <a href="/">
                            <img class="footer_logo" src="{{ asset('public/assets/img/logo.png') }}" alt="">
                        </a>    
                    </div>    
                </div>
            </div>            
        </div>
    </footer>
    <div class="modal fade" id="mobileMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                <a class="navbar-brand" href="/">
                    <img class="site_logo" src="{{asset('public/assets/img/logo.png')}}" alt="">
                </a>
              </h5>
              <button type="button" class="close btn_close_mobile_menu" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul class="navbar-nav mr-auto">                    
                   
                    <li class="nav-item @if($page == "home") selected_menu @endif">
                        <a class="nav-link" href="/">Home </a>
                    </li>
                    <li class="nav-item @if($page == "ioasis") selected_menu @endif">
                        <a class="nav-link" href="{{ route('ioasis') }}">I-OASIS </a>
                    </li>
                    <li class="nav-item @if($page == "games") selected_menu @endif">
                        <a class="nav-link" href="{{ route('games') }}">Serious Games</a>
                    </li> 
                    <li class="nav-item @if($page == "videos") selected_menu @endif">
                        <a class="nav-link" target="blank" href="#">VIDEOS</a>
                    </li>           
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Sign In <span class="sr-only">(current)</span></a>
                        </li>
                    @else  
                        
                        @if (Auth::user()->role == "2") 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                            </li>                            
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>  
                    @endguest  

                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn_transparent" type="button"><i class="fas fa-search"></i></button>
                        </form>
                    </li>          
                </ul>   
            </div>            
          </div>
        </div>
      </div>
</body>
</html>

