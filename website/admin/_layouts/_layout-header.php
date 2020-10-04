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
    <link rel="stylesheet" href="assets/css/custom.css">
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

        // function christmasTime(){
        //     var countDownDate = new Date("December 25, 2020 00:00:00").getTime();
        //     var x = setInterval(function() {
        //         var now = new Date().getTime();
        //         var distance = countDownDate - now;
        //         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        //         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        //         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        //         var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        //         if (days == 1) {
        //             $dagen = "dag";
        //         }
        //         else {
        //             $dagen = "dagen";
        //         }
        //         if (minutes == 1) {
        //             $minuten = "minuut";
        //         }
        //         else {
        //             $minuten = "minuten";
        //         }
        //         if (seconds == 1) {
        //             $secondes = "seconde";
        //         }
        //         else {
        //             $secondes = "secondes";
        //         }
        //         document.getElementById("countDown").innerHTML = days + " " + $dagen + ", " + hours + " uur, "
        //             + minutes + " " + $minuten + " en " + seconds + " " + $secondes;
        //         if (distance < 0) {
        //             clearInterval(x);
        //             document.getElementById("demo").innerHTML = "HOERA WE ZIJN ONLINE";}
        //     }, 1000);
        // }

        function setActive() {
            aObj = document.getElementById('nav').getElementsByTagName('li');
            for(i=0;i<aObj.length;i++) {
                if(document.location.href.indexOf(aObj[i].href)>=0) {
                    aObj[i].className='active';
                }
            }
        }

        window.onload = setActive;

    </script>
</head>

<body id="page-top" onload="startTime()">
<div id="wrapper">
<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon"><i class="fas fa-user-astronaut"></i></div>
                <div class="sidebar-brand-text mx-3"><span>Het Platenhuis</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <?php
            $activePage = basename($_SERVER['PHP_SELF'], ".php");
            ?>
            <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item" role="presentation"><a class="nav-link <?= ($activePage == 'index') ? 'active':''; ?>" href="./index.php"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link <?= ($activePage == 'toevoegen') ? 'active':''; ?>" href="./toevoegen.php"><i
                                class="fas fa-user-edit"></i><span>Toevoegen</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link <?= ($activePage == 'huidige-profielen') ? 'active':''; ?>" href="./huidige-profielen.php"><i
                                class="fas fa-user"></i><span>Profielen</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link <?= ($activePage == 'newsletter-users') ? 'active':''; ?>" href="./newsletter-users.php"><i
                                class="fas fa-newspaper"></i><span>Nieuwsbrief</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link <?= ($activePage == 'update-maker') ? 'active':''; ?>" href="./update-maker.php"><i
                                class="far fa-edit"></i><span>Updates</span></a><a class="nav-link <?= ($activePage == 'songofday') ? 'active':''; ?>"
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
    <?php
include '_layout-userlayout.phtml';