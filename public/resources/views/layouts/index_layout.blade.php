<!DOCTYPE html>
<html lang="nl">
<head>
    <!--    ©Cedric Fortuin || 2020-->
    <!--    Meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="{{ config('app.description') }}"/>
    <meta name="keywords" content="{{ config('app.keywords') }}">
    <meta name="author" content="{{ config('app.authors') }}">
    <meta name="google-site-verification" content="{{ config('app.google_site_key') }}" />

    <!--    Link tags-->
    <link rel="shortcut icon" href="{{ asset('img/functional/song.png') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    {{--    <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">--}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/custom.css') }}">

    <!--    Functional tags-->
    <title>{{ config('app.name') }}</title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F63N0SR2NN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-F63N0SR2NN');
    </script>
</head>
<body id="page-top">
<nav class="navbar navbar-light navbar-expand-lg navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand js-scroll-trigger" href="/">{{ config('app.name') }}</a>
        <button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive"
                type="button" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                        class="nav-link js-scroll-trigger buttonBands text-capitalize" href="/">home</a></li>
                <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                        class="nav-link js-scroll-trigger buttonBands text-capitalize" href="/#about">over ons</a></li>
                <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                        class="nav-link js-scroll-trigger buttonBands text-capitalize" href="/#contact">contact</a></li>
                <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                        class="nav-link js-scroll-trigger buttonBands text-capitalize" href="/artiesten">artiesten</a></li>
                <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                        class="nav-link js-scroll-trigger buttonBands text-capitalize" href="#">Updates</a></li>
            </ul>
        </div>
    </div>
</nav>
<section id="home"></section>
@yield('masthead-image')
<section id="about" class="content-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Over ons</h2>
                <p>Wij zijn <a href="https://www.instagram.com/leon_lammersen/" target="_blank">Leon</a>
                    en
                    <a href="https://www.instagram.com/cedricfortuin/" target="_blank">Cedric</a>,
                    twee muziek-freaks die graag hun muziek delen. We hebben samen een beginnende platencollectie, maar
                    willen deze natuurlijk graag uitbreiden!<br/><br/>Zie
                    hieronder voor het Nummer van de Dag, of kijk verder op de andere pagina's.</p>
            </div>
        </div>
    </div>
</section>
<section class="download-section content-section text-center"
         style="background-image:url({{ asset('img/custom/record-close.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto"><br>
                <h2>Nummer van de dag:</h2>
                <table class="table table-borderless" style="color: white">
                    <tbody>
                    <tr>
                        <td scope="row">PF</td>
                        <br/>
                    </tr>
                    <tr>
                        <td>
                            @yield('sitetag')
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Check hier de complete <a href="https://open.spotify.com/playlist/5lJdNioaNWk8boL9EIezS5?si=l1VEfDDnRXiJsNzL2qr2_w" target="_blank">Spotify lijst</a>.</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="content-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2>Contact</h2>
                <p>Voel je vrij om ons te volgen op Instagram of een mailtje te sturen!
                    <br><small>Wil je een plaat kopen of verkopen? Stuur ons dan een mailtje. We reageren dan zo snel
                        mogelijk. <br>(Je mail wordt <u>niet</u> gebruikt voor reclame).</small></p>
            </div>
        </div>
        <div class="d-inline-flex mt-5 mb-0">
            <div>
                <a class="js-scroll-trigger"
                   href="#home">
                    <button class="btn btn-primary btn-lg btn-default" type="button"><i
                            class="fa fa-arrow-up fa-fw"></i><span class="network-name text-capitalize"
                                                                   style="font-size: 70%">&nbsp;Naar boven</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>
</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="{{ asset('js/grayscale.js') }}"></script>
</html>
