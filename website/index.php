<!DOCTYPE html>
<html lang="nl">
<head>
    <!--    ©Cedric Fortuin || 2020-->
    <!--    Meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Het PlatenHuis - de website waar je leest over verschillende bands, artiesten en albums. Volg ons op instagram om
        om up to date te blijven."/>
    <meta name="keywords"
          content="Platen, muziek, Pink Floyd, ELO, Prince, albums, Dire Straits, Supertramp, vinyl, Queen, Normaal, George Michael, Michael Jackson, Eminem, lp, cd, cassette">
    <meta name="author" content="Cedric Fortuin, Leon Lammersen">
    <meta name="google-site-verification" content="3RtN2T3y_4YVjvsdhceBu4iNetvqlKrhQX089BeY7Eg" />

    <!--    Link tags-->
    <link rel="shortcut icon" href="./assets/img/functional/song.png" type="image/x-icon"/>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<!--    Google ads-->
    <script data-ad-client="ca-pub-5206885279475064" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <!--    Functional tags-->
    <title>Het PlatenHuis</title>
    <style>

        body {
            font-family: 'Varela Round', sans-serif;

            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        #tableRecords {
            backdrop-filter: opacity(10%);
            border-radius: 10px;
        }

        .buttonBands {
            border: none;
        }

        .buttonBands:hover {
            background-color: rgba(88, 88, 88, 0.3);
        }

        #hifi-dropdown {
            border-radius: 5px;
            background-color: transparent;
            backdrop-filter: opacity(40%);
            border: none;
        }

        #hifi-dropdown a:hover {
            background-color: transparent;
            text-decoration: underline;
        }
    </style>
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
    <div class="container"><a class="navbar-brand js-scroll-trigger" href="#Home">HET PLATENHUIS</a>
        <button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive"
                type="button" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                            class="nav-link active js-scroll-trigger buttonBands text-capitalize" href="#Home">home</a></li>
                <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                            class="nav-link active js-scroll-trigger buttonBands text-capitalize" href="#about">over ons</a></li>
                <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                            class="nav-link active js-scroll-trigger buttonBands text-capitalize" href="#contact">contact</a></li>
                <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                            class="nav-link active js-scroll-trigger buttonBands text-capitalize" href="pages/artiesten.html">artiesten</a>
                </li>
                <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                            class="nav-link active js-scroll-trigger buttonBands text-capitalize" href="pages/updates.php">Updates</a></li>
            </ul>
        </div>
    </div>
</nav>
<section id="Home"></section>
<header class="masthead" style="background-image:url('assets/img/custom/recordplayer-close-arm.jpg')">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="brand-heading" style="font-size: calc(1em + 4vw);">het platenhuis</h1><br/>
                </div>
            </div>
        </div>
    </div>
</header>
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
<section id="posts" class="download-section content-section text-center"
         style="background-image:url('assets/img/custom/record-close.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto"><br>
                <h2>Nummer van de dag:</h2>
                <table class="table table-borderless" style="color: white">
                    <?php
                    include_once('admin/config/config.php');
                    $result = mysqli_query($link, "SELECT * FROM songofday ORDER BY SONG_ID DESC");
                    $row = mysqli_fetch_array($result)
                    ?>
                    <tbody>
                    <tr>
                        <td scope="row"><?php echo $row["SONG_NAME"] . " - " . $row["SONG_ARTIST"]; ?></td>
                        <br/>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $row["SPOTIFY_LINK"]; ?>
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
        <div class="row justify-content-center">
            <div class="col-md-2 mb-2">
                <a href="https://www.instagram.com/hetplatenhuis/" target="_blank">
                    <button class="btn btn-primary btn-lg btn-default" type="button"><span class="network-name text-capitalize"
                                                                                           style="font-size: 15px;"><i class="fab fa-instagram"></i>&nbsp;instagram</span>
                    </button>
                </a>
            </div>
            <div class="col-md-2 mb-2">
                <a href="https://www.facebook.com/hetplatenhuis" target="_blank">
                    <button class="btn btn-primary btn-lg btn-default" type="button"><span class="network-name text-capitalize"
                                                                                           style="font-size: 15px;"><i class="fab fa-facebook"></i>&nbsp;Facebook</span>
                    </button>
                </a>
            </div>
            <div class="col-md-2 mb-2">
                <a href="mailto:info@hetplatenhuis.nl">
                    <button class="btn btn-primary btn-lg btn-default" type="button"><span class="network-name text-capitalize" style="font-size: 15px;"><i class="fas fa-at"></i>&nbsp;email</span>
                    </button>
                </a>
            </div>
        </div>
        <div class="d-inline-flex mt-5 mb-0">
            <div>
                <a class="js-scroll-trigger"
                   href="#Home">
                    <button class="btn btn-primary btn-lg btn-default" type="button"><i
                                class="fa fa-arrow-up fa-fw"></i><span class="network-name text-capitalize"
                                                                       style="font-size: 70%">&nbsp;Naar boven</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container text-center">
        <p>Copyright © <a href="mailto:info@hetplatenhuis.nl">HetPlatenHuis</a> || 2020</p>
        <small>Door gebruik te maken van onze website ga je akkoord met onze <a href="#contact">gebruiksvoorwaarden</a> en
            <a href="#contact">privacy</a>.</small><br>
        <small>Favicon gemaakt door <a href="https://www.flaticon.com/authors/iconixar" title="iconixar"
                                       target="_blank">iconixar</a> van <a href="https://www.flaticon.com/"
                                                                           title="Flaticon" target="_blank">
                www.flaticon.com</a></small><br>
        <small><a href="admin/index.php">Naar de admin pagina</a></small>
    </div>
</footer>
</body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/grayscale.js"></script>
</html>
