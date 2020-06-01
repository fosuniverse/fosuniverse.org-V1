<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FOSUNIVERSE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

  <link href="/img/icon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>

<!--/ Nav Start /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
          
        </button>
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" height="80" width="100" ></a> 
       
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if(session('active') == 'home') active @endif" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(session('active') == 'about') active @endif" href="{{ route('about') }}">About Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  @if(session('active') == 'projects') active @endif" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Projects
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('projects-resources') }}">Resources</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  @if(session('active') == 'events') active @endif" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Events
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('events-become-member') }}">Become A Mentor</a>

                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link @if(session('active') == 'join') active @endif" href="{{ route('join') }}">Join Community</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<!--/ Nav End /-->

@yield('content')

<!--/ footer Star /-->
<section class="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="widget-a">
                    <div class="w-header-a">
                        <a class="navbar-brand text-brand" href="{{ route('home') }}">FOS<span class="color-b">Universe</span></a>

                    </div>
                    <div class="w-body-a">
                        <p>
                            <span class="text-success">A community </span> of passionate technology enthusiasts who
                            dedicate work towards <span class="text-success">building, enhancing and adding value </span>to <span class="text-success">
                                open source tools
                            </span>in Africa.
                        </p>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <li class="color-a">
                                <span class="color-text-a"><span class="fa fa-map-marker fa-lg"></span></span><a
                                    href="https://goo.gl/maps/iWEQCM22L2YaiGK6A"> Accra, Ghana</a></li>
                            <li class="color-a">
                                <span class="color-text-a"><span class="fa fa-envelope fa-lg"></span></span> hello@fosuniverse.org</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">Quick Links</h3>
                    </div>
                    <div class="w-body-a">
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="{{ route('about') }}">About Community</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Projects & Resources</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Events</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="{{ route('join') }}">Join Community</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">International sites</h3>
                    </div>
                    <div class="w-body-a">
                        <ul class="list-unstyled">
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">Nigeria</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">China</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">Hong Kong</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">Argentina</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="socials-a">
                    <ul class="list-inline">
                      
                        <li class="list-inline-item">
                            <a href="https://twitter.com/osc_ghana">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://github.com/fosuniverse">
                                <i class="fa fa-github" aria-hidden="true"></i>
                            </a>
                        </li>
                       
                        
                    </ul>
                </div>
                <div class="copyright-footer">
                    <p class="copyright color-text-a">
                        &copy; 
                        <span><b>FOS</b></span><span class="color-b"><b>UNIVERSE</b></span> @php echo date('Y'); @endphp
                    </p>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--/ Footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="/lib/jquery/jquery.min.js"></script>
<script src="/lib/jquery/jquery-migrate.min.js"></script>
<script src="/lib/popper/popper.min.js"></script>
<script src="/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/lib/scrollreveal/scrollreveal.min.js"></script>
<!-- Contact Form JavaScript File -->
{{--  <script src="contactform/contactform.js"></script>  --}}

<!-- Main Javascript File -->
<script src="/js/main.js"></script>

@yield('scripts')

</body>
</html>
