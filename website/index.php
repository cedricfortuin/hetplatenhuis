<?php
include 'admin/config/config.php';
$row = mysqli_fetch_array($ConnectionLink->query("SELECT * FROM songofday ORDER BY SONG_ID DESC"));

$getAlertEnableArray = $ConnectionLink->query("SELECT * FROM configuration WHERE CONFIG_KEY = 'CONFIG_ENABLE_WEBSITE_NEW_FEATURE_ALERT'")->fetch_array();
$getAlertTextArray = $ConnectionLink->query("SELECT * FROM configuration WHERE CONFIG_KEY = 'CONFIG_NEW_WEBSITE_FEATURE_ALERT_TEXT'")->fetch_array();

$getSotdEnableArray = $ConnectionLink->query("SELECT * FROM configuration WHERE CONFIG_KEY = 'CONFIG_ENABLE_SONG_OF_DAY'")->fetch_array();
$getNewsletterEnableArray = $ConnectionLink->query("SELECT * FROM configuration WHERE CONFIG_KEY = 'CONFIG_ENABLE_NEWSLETTER'")->fetch_array();
$getMyPHEnableArray = $ConnectionLink->query("SELECT * FROM configuration WHERE CONFIG_KEY = 'CONFIG_ENABLE_MY_PH'")->fetch_array();

$song_name = $row["SONG_NAME"];
$song_artist = $row["SONG_ARTIST"];
$spotify_link = $row["SPOTIFY_LINK"];

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include '_layouts/_layout-headtags.html';?>
</head>
<body id="page-top">
<?php include '_layouts/_layout-index-navbar.phtml';?>
<section id="home"></section>
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
<div class="alert alert-success text-center <?php echo ($getAlertEnableArray['CONFIG_VALUE'] == 1)? '' : 'd-none' ?>"><p><?php echo $getAlertTextArray['CONFIG_VALUE'] ?></p></div>
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
<section class="download-section content-section text-center <?php echo ($getSotdEnableArray['CONFIG_VALUE'] == 1)? '' : 'd-none' ?>"
         style="background-image:url('assets/img/custom/record-close.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto"><br>
                <h2>Nummer van de dag:</h2>
                <table class="table table-borderless" style="color: white">
                    <tbody>
                    <tr>
                        <td scope="row"><?php echo $song_name . " - " . $song_artist;?></td>
                        <br/>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $spotify_link;?>
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
        <div class="row mb-5 <?php echo ($getNewsletterEnableArray['CONFIG_VALUE'] == 1)? '' : 'd-none'?>">
            <div class="col-md-6 mx-auto">
                <p>Schrijf je nu in voor de nieuwsbrief en krijg te gekke updates over muziek, artiesten en meer!</p>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-left">
                                <label for="inputName">Hoe mogen we je noemen?</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Je naam" name="inputEmail">
                                <p class="invalid-feedback">Dit veld is verplicht.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-left">
                                <label for="inputEmail">Hoe kunnen we je bereiken?</label>
                                <?php $email_err = 'is-invlid';?>
                                <input type="email" class="form-control <?php echo $email_err?>" id="inputEmail" placeholder="Je email" name="inputEmail">
                                <?php
                                if ($email_err == 'is-invalid') {
                                    ?>
                                        <p class="invalid-feedback">Dit veld is verplicht.</p>
                                    <?php
                                } else {
                                    ?>
                                        <small id="inputEmail" class="form-text text-muted">(Je mail wordt <u>niet</u> gebruikt voor reclame)</small>
                                    <?php
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-outline-primary" value="Opsturen!" name="submitNewsletter">
                </form>
            </div>
        </div>
        <br/>
        <div class="row mt-5">
            <div class="col-lg-10 mx-auto">
                <h2>Contact</h2>
                <p>Voel je vrij om ons te volgen op Instagram of een mailtje te sturen!
                    <br><small>Wil je een plaat kopen of verkopen? Stuur ons dan een mailtje. We reageren dan zo snel
                        mogelijk.</p>
            </div>
        </div>
        <?php include '_layouts/_layout-contactbuttons.html';?>
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
<?php include '_layouts/_layout-index-footer.html';?>
</body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/grayscale.js"></script>
</html>
