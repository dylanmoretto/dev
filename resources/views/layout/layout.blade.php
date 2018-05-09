<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="WowThemez">
    <title>{{Config::get('constante.constante.title')}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <link rel="stylesheet" href="{{asset('css/elegant-font-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/elegant-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/venobox/venobox.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id='preloader' >
    <div class='loader' >
        <img src="img/loading.gif" width="80" alt="">
    </div>
</div><!-- Preloader -->

<header id="header" class="header_section">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <h2 clas ="nav-header">{{Config::get('constante.constante.title')}}</h2>
            </div>
            <div id="navbar" class="navbar-right">
                <ul id="mainmenu" class="nav navbar-nav nav-menu">
                    <li class="active"><a href="{{route('index')}}">Acceuil <span class="sr-only">(current)</span></a>
                    </li>
                    <li> <a href="{{route('tarif')}}">Tarifs</a>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="about-2.html">About 02</a></li>
                        </ul>
                    </li>
                    <li> <a href="services.html">Boutique</a>
                        <ul>
                            <li><a href="services.html">Service</a></li>
                            <li><a href="services-2.html">Service 02</a></li>
                        </ul>
                    </li>
                    <li> <a href="appointment.html">Galerie</a>
                        <ul>
                            <li class="active"><a href="appointment.html">Appointment</a></li>
                            <li><a href="appointment-2.html">Appointment 02</a></li>
                        </ul>
                    </li>
                    <li> <a href="{{route('who')}}">Qui sommes nous ?</a>
                    </li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div><!--/.navbar-collapse -->
        </div>
    </nav><!-- Navigation Bar -->
</header> <!-- Header_Section -->

<div class="content">
  @yield('content')
</div>
<div class="sponsor_section bg-grey">
    <div class="container">
        <ul id="sponsor_carousel" class="sponsor_items owl-carousel">
            <li class="sponsor_item">
                <img src="img/sponsor-1.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-2.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-3.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-4.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-5.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-1.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-2.png" alt="sponsor-image">
            </li>
            <li class="sponsor_item">
                <img src="img/sponsor-3.png" alt="sponsor-image">
            </li>
        </ul>
    </div>
</div><!-- ./sponsor_section -->

<section id="subscribe" class="widget_section padding">
    <div class="container">
        <div class="col-md-4 col-xs-6 xs-padding">
            <div class="footer_widget">
                <!--<img class="mb-15" src="img/logo.png" alt="Brand">-->
                <h3>{{Config::get('constante.constante.title')}}
                <h4>2 rue St Sébastien </br>06410 BIOT
                    <br><i class="fa fa-phone" aria-hidden="true"></i>04 22 22 22 22</h4>
                <ul class="widget_social">
                    <li><a href="#"><img src ="{{asset('img/facebook.png')}}" width="35px"></i></a></li>                   
                    <li><a href="#"><img src ="{{asset('img/insta.png')}}" width="30px"></i></a></li>                
                    <li><a href="#"><img src ="{{asset('img/twitter.png')}}" width="30px"></i></a></li>                
                    <li><a href="#"><img src ="{{asset('img/linkedin.png')}}" width="35px"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-xs-6 xs-padding">
            <div class="footer_widget">
                <h3>Horaires d'ouverture</h3>
                <h4>Mercredi - Vendredi  9h-12h  13h-19h <br>Saturday - Sunday 4:30PM - 10:00PM <br>Monday - Friday 5:30PM - 11:00PM</h4>

            </div>
        </div>
        <div class="col-md-4 col-xs-12 xs-padding">
            <div class="footer_widget">
                <h3>S'inscrire à notre newsletter</h3>
                <div class="subscribe_form">
                        <input type="email" name="email" id="subs-email" class="form_input" placeholder="Email Address...">
                        <a class="submit" id ="newsletter">S'inscrire</a>
                        <div class="clearfix"></div>
                        <div id="subscribe-result">
                            <p class="subscription-success"></p>
                            <p class="subscription-error"></p>
                        </div>
                    </form>
                    <div id ="result">

                    </div>
                </div><!-- Subscribe Form -->
            </div>
        </div>
    </div>
</section><!-- /.widget_section -->

<footer class="footer_section">
    <div class="container">
        <div class="col-xs-6 xs-padding">
            <div class="copyright">&copy; {{date('Y')}} {{Config::get('constante.constante.society')}} </div>
        </div>
        <div class="col-xs-6 xs-padding">
            <ul class="footer_social">
                <li><a href="#">Orders</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Report Problem</a></li>
            </ul>
        </div>
    </div>
</footer><!-- /.footer_section -->

<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<!-- jQuery Lib -->
<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/vendor/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/vendor/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery.isotope.v3.0.2.js')}}"></script>
<script src="{{asset('js/vendor/smooth-scroll.min.js')}}"></script>
<script src="{{asset('js/vendor/venobox.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('js/vendor/jquery.mb.YTPlayer.min.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
<script src="{{asset('js/appointment.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>