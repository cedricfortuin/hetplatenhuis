<?php
// Initialize the session

/*
 * Copyright © 2020 bij Het Platenhuis en Cedric Fortuin. Niks uit deze website mag zonder toestemming gebruikt, gekopieerd en/of verwijderd worden. Als je de website gebruikt ga je akkoord met onze gebruiksvoorwaarden en privacy.
 */

session_start();
include 'config/config.php';
$new_sql = mysqli_query($link, "SELECT * FROM users WHERE USER_ID ='" . $_SESSION['id'] . "'");
$username = mysqli_fetch_array($new_sql);

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$version = '1.4.3';

?>


    <!DOCTYPE html>
    <html lang="nl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="shortcut icon" href="./assets/img/functional/song.png" type="image/x-icon"/>
        <title>DASHBOARD - <?php echo $username['USER_FIRSTNAME']; ?></title>
        <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="./assets/fonts/fontawesome-all.min.css">
        <script>
            function startTime() {
                let today = new Date();
                let h = today.getHours();
                let m = today.getMinutes();
                let s = today.getSeconds();
                let d = today.getDate();
                let mo = (today.getMonth() + 1);
                let y = today.getFullYear();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('time-home').innerHTML =
                    d + "/" + mo + "/" + y + "  " + h + ":" + m + ":" + s;
                let t = setTimeout(startTime, 500);
            }

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i
                }
                return i;
            }

            function christmasTime(){
                var countDownDate = new Date("December 25, 2020 00:00:00").getTime();
                var x = setInterval(function() {
                    var now = new Date().getTime();
                    var distance = countDownDate - now;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    if (days == 1) {
                        $dagen = "dag";
                    }
                    else {
                        $dagen = "dagen";
                    }
                    if (minutes == 1) {
                        $minuten = "minuut";
                    }
                    else {
                        $minuten = "minuten";
                    }
                    if (seconds == 1) {
                        $secondes = "seconde";
                    }
                    else {
                        $secondes = "secondes";
                    }
                    document.getElementById("countDown").innerHTML = days + " " + $dagen + ", " + hours + " uur, "
                        + minutes + " " + $minuten + " en " + seconds + " " + $secondes;
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "HOERA WE ZIJN ONLINE";}
                }, 1000);
            }
        </script>
    </head>

<body id="page-top" onload="startTime(); christmasTime()">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon"><i class="fas fa-user-astronaut"></i></div>
                <div class="sidebar-brand-text mx-3"><span>Het Platenhuis</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="./index.php"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="./toevoegen.php"><i
                                class="fas fa-user-edit"></i><span>Toevoegen</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="./huidige-profielen.php"><i
                                class="fas fa-user"></i><span>Profielen</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="./newsletter-users.php"><i
                                class="fas fa-newspaper"></i><span>Nieuwsbrief</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="./update-maker.php"><i
                                class="far fa-edit"></i><span>Updates</span></a><a class="nav-link"
                                                                                   href="./songofday.php"><i
                                class="fab fa-spotify"></i><span>Nummer van de Dag</span></a><a class="nav-link"
                                                                                                href="./logout.php"><i
                                class="far fa-user-circle"></i><span>Logout</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="https://hetplatenhuis.nl/"><i
                                class="fas fa-bars"></i><span>Naar de site</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline">
                <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
            </div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            <div class="container-fluid">
                <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i
                            class="fas fa-bars"></i></button>
                <ul class="nav navbar-nav flex-nowrap ml-auto">
                    <div class="d-none d-sm-block topbar-divider"></div>
                    <li class="nav-item dropdown no-arrow" role="presentation">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                                                   data-toggle="dropdown" aria-expanded="false"
                                                                   href="#"><span
                                        class="d-none d-lg-inline mr-2 text-gray-600 small text-center"><?php echo 'Welkom ' . $username['USER_FIRSTNAME']; ?><p
                                            id="time-home"></p></span></a>
                            <div
                                    class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                <a class="dropdown-item" role="presentation" href="./own-profile.php"><i
                                            class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profiel</a>
                                <a
                                        class="dropdown-item" role="presentation" href="./update-maker.php"><i
                                            class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Updates</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" role="presentation" href="./logout.php"><i
                                            class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <section class="content-section" style="color: black;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            if ($username['USER_ROLE'] != 1) {
                                ?>
                                <p class="alert alert-info"><?php echo 'Hoi ' . $username['USER_FIRSTNAME'] . ', welkom op het vernieuwde admin paneel. Kijk gerust rond! Voor vragen, stuur een mailtje naar 
                                <a href="mailto:cedric@hetplatenhuis.nl">Cedric</a>. (versie <a href="versions.php" >'. $version .'</a>)' ?></p>

                                <?php
                            } ?>
                            <?php
                            if ($username['USER_ROLE'] != 1) {
                                ?>
                                <p class="alert alert-warning">Let op, het is mogelijk dat de pagina "Nieuwsbrief" niet goed werkt. Je kunt sowieso geen mails sturen.</p>

                                <?php
                            } ?>

                        </div>
                        <div class="col-md-8">
                            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                                <h3 class="text-dark mb-0">Dashboard<br/><small>Het is nog <span id="countDown"></span> tot Kerst!&nbsp;<i class="fa fa-sleigh"></i></small></h3>
                            </div>
                            <p><?php echo "Welkom " . $username['USER_FIRSTNAME']; ?> bij het admin-paneel. Hier kun je
                                als admin het volgende doen: </p>
                            <ul>
                                <li>Het <a href="songofday.php">nummer van
                                        de dag</a>
                                    toevoegen / verwijderen
                                </li>
                                <li>Een <a href="update-maker.php">update</a> over de
                                    website
                                    toevoegen / verwijderen
                                </li>
                                <?php

                                if ($username['USER_ROLE'] != 1) {
                                    echo '<li>Je hebt helaas niet de bevoegdheden om gebruikers toe te voegen of te wijzigen <br/><i>(je eigen account wel)</i></li>';
                                } else {
                                    ?>
                                    <li>Nieuwe <a href="toevoegen.php">gebruikers</a> aanmaken</li>
                                    <?php
                                }
                                if ($username['USER_ROLE'] == 1) {
                                    echo '<li><p>De huidige versie is: <a href="versions.php">'.$version.'</a></p></li>';
                                }
                                    ?>
                            </ul>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-lg-6"><br>
                            <?php
                            $resultsong = mysqli_query($link, "SELECT * FROM songofday ORDER BY SONG_ID DESC");
                            $row = mysqli_fetch_array($resultsong);
                            ?>
                            <p>Het laatste nummer van de dag. <a href="songofday.php"><i>Naar pagina</i></a></p>
                            <table class="table" style="color: black">
                                <tr>
                                    <th scope="col">Nummer</th>
                                    <th scope="col">Datum</th>
                                </tr>
                                <tbody>
                                <tr>
                                    <td scope="row"><?php echo $row["SONG_NAME"] ?></td>
                                    <td scope="row">
                                        <?php echo $row["UPLOAD_DATE"]; ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php
                        $result = mysqli_query($link, "SELECT * FROM posts ORDER BY POST_ID DESC");
                        ?>
                        <div class="col-lg-6"><br>
                            <p>De laatste update op de website. <a href="update-maker.php"><i>Naar pagina</i></a></p>
                            <table class="table" style="color:black">
                                <tr>
                                    <th scope="col">Titel</th>
                                    <th scope="col">Datum</th>
                                </tr>
                                <?php
                                $row = mysqli_fetch_array($result)
                                ?>
                                <tbody style="color: black;">
                                <tr>
                                    <td><?php echo $row["POST_TITLE"]; ?></td>
                                    <td><?php echo $row["UPLOAD_DATE"]; ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <section class="content-section">

                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>
<?php include './_layouts/_layout-footer.php' ?>