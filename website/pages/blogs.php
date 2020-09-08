<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Het PlatenHuis - Blogs</title>
    <meta name="description" content="Het PlatenHuis - de website waar je leest over verschillende bands, artiesten en albums. Volg ons op instagram om
        om up to date te blijven. Stuur voor vragen, opmerkingen of suggesties een mailtje naar info@hetplatenhuis.nl"/>
    <meta name="keywords"
          content="Platen, muziek, Pink Floyd, ELO, Prince, albums, Dire Straits, Supertramp, vinyl, Queen, Normaal, George Michael, Michael Jackson, Eminem, lp, cd, cassette">
    <meta name="author" content="Cedric Fortuin">
    <link rel="shortcut icon" href="../assets/img/functional/song.png" type="image/x-icon"/>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <meta name="google-site-verification" content="3RtN2T3y_4YVjvsdhceBu4iNetvqlKrhQX089BeY7Eg" />

    <style>
        body {
            font-family: 'Varela Round', sans-serif;

            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        body::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body id="page-top">
<nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav"
     style="backdrop-filter: opacity(30%)">
    <div class="container"><a class="navbar-brand js-scroll-trigger" href="../index.php">HET PLATENHUIS - blogs</a>
        <button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive"
                type="button" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a
                            class="nav-link active js-scroll-trigger" href="../index.php"><i
                                class="fa fa-reply fa-fw"></i>
                        terug naar het homescherm</a></li>
            </ul>
        </div>
    </div>
</nav>
<section id="Home"></section>
<header class="masthead" style="background-image:url('../assets/img/custom/record-laptop.jpg')">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="brand-heading" style="font-size: calc(1em + 4vw);">Blogs</h2>
                    <p>Lees hier alle updates over de website, het Instagram account of andere dingen!</p>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="blogs" class="content-section">
    <?php include_once '../config.php';
    $result = mysqli_query($link, "SELECT * FROM posts ORDER BY id DESC")
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <table class="table table-responsive" style="color:white">
                    <tr>
                        <th scope="col">Titel</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Datum</th>
                        <th scope="col">Tekst</th>
                    </tr>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tbody style="color: white;">
                    <tr>
                        <td><?php echo $row["title"]; ?></td>
                        <td><?php echo $row["text"]; ?></td>
                        <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["author"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto text-center">
                <br><br>
                <p>Lees hier de laatste updates van Instagram!</p>
                <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
                <script type="text/javascript">
                    (function(){
                        var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
                        i.src = "https://cdn.curator.io/published/e92a5522-96eb-42c8-8f07-0c3ea4b64fd7.js";
                        e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
                    })();
                </script>
                <ul class="nav navbar-nav ml-auto">
                    <br><br>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="js-scroll-trigger"
                                                                                           href="#Home">
                            <button class="btn btn-primary btn-lg btn-default" type="button"><i
                                        class="fa fa-arrow-up fa-fw"></i><span class="network-name"
                                                                               style="font-size: 70%">&nbsp;Naar boven</span>
                            </button>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container text-center">
        <p>Copyright © <a href="mailto:info@hetplatenhuis.nl">HetPlatenHuis</a> || 2020</p>
        <small>Favicon gemaakt door <a href="https://www.flaticon.com/authors/iconixar" title="iconixar"
                                       target="_blank">iconixar</a> van <a href="https://www.flaticon.com/"
                                                                           title="Flaticon" target="_blank">
                www.flaticon.com</a></small>
        <small> || Foto's van <a href="https://unsplash.com/images/stock/non-copyrighted" target="_blank">UnSplash</a>
            (no copyright)</small><br>
        <small><a href="https://hetplatenhuis.nl/admin/update-maker.php">Naar de admin pagina</a></small>
    </div>
</footer>


<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="../assets/js/grayscale.js"></script>
</body>
</html>