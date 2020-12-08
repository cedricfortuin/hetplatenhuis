<?php
include '../admin/config/config.php';
include 'layouts/_layout-head.phtml';
$getData = $ConnectionLink->query('SELECT * FROM artist_info ORDER BY ARTIST_NAME');
?>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v8.0&appId=309308150285155&autoLogAppEvents=1" nonce="8NNSEuf9"></script>
<?php include 'layouts/_layout-navbar-artists.phtml';?>
<section id="Home"></section>
<header class="masthead" style="background-image:url('../assets/img/custom/old-cd.jpg')">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="brand-heading" style="font-size: calc(1em + 4vw);">artiesten</h2><br/>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="bands" class="content-section">
    <div class="container h-100">
        <div class="d-flex justify-content-end h-100">
            <div class="search">
                <input type="text" id="searchInput" placeholder="Zoeken naar..." onkeyup="makeSearchBar()" onfocus="this.value='';makeSearchBar()"/>
                <i class="fa fa-search"></i>
            </div>
        </div>
        <br>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Zie hieronder de bands en artiesten waarvan een pagina aangemaakt is.</p>
            </div>
        </div>
        <div class="row text-center" id="bandsGallery">
            <?php
            $i = 0;
            while ($showData = $getData->fetch_array()) {
                ?>
                <a href="page.php?page_uuid=<?php echo $showData['ARTIST_UUID']?>" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 bandsGallery">
                    <img src="<?php echo $showData['ARTIST_IMAGE']?>" alt="<?php echo $showData['ARTIST_NAME']?> banner" class="img-fluid rounded">
                    <p style="color:white"><br><?php echo $showData['ARTIST_NAME']?></p>
                </a><br>
                <?php
            $i++;
            }
            ?>
            <br>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto text-center">
                <ul class="nav navbar-nav ml-auto">
                    <br/><br/>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="js-scroll-trigger"
                                                                                           href="#Home">
                        <button class="btn btn-primary btn-lg btn-default text-capitalize" type="button"><i
                                class="fa fa-arrow-up fa-fw"></i><span class="network-name" style="font-size: 70%">&nbsp;Naar boven</span>
                        </button>
                    </a></li>
                </ul>
            </div>
        </div><br><br>
        <div class="row justify-content-center text-center">
            <div class="col-md-12">
                <p>Deel deze pagina op social media!</p>
            </div>
            <div class="col-md-1 mt-3">
                <a class="btn shareButton btn-outline-primary btn-lg btn-fb" type="button" role="button" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fhetplatenhuis&amp;src=sdkpreparse" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="col-md-1 mt-3">
                <a class="btn shareButton btn-outline-primary btn-lg btn-wa" type="button" role="button" href="whatsapp://send?text=Check deze pagina! https://hetplatenhuis.nl/" target="_blank"><i class="fab fa-whatsapp"></i></a>
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
            (no copyright)</small>
    </div>
</footer>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="../assets/js/grayscale.js"></script>
<script src="../functional/functional-index.js" type="application/javascript"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>
</html>