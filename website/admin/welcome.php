<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
} ?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="./assets/img/functional/song.png" type="image/x-icon"/>
    <title>DASHBOARD - <?php echo $_SESSION['firstname'] ?></title>
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
                d + "/" + mo + "/" + y + " - " + h + ":" + m + ":" + s;
            let t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }
            ;
            return i;
        }
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
            <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="welcome.php"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="toevoegen.php"><i
                                class="fas fa-user-edit"></i><span>Toevoegen</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="huidige-profielen.php"><i
                                class="fas fa-user"></i><span>Profielen</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="update-maker.php"><i
                                class="far fa-edit"></i><span>Updates</span></a><a class="nav-link"
                                                                                   href="songofday.php"><i
                                class="fab fa-spotify"></i><span>Nummer van de Dag</span></a><a class="nav-link"
                                                                                                href="logout.php"><i
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
                                            class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo "Welkom " . $_SESSION['firstname']; ?></span></a>
                                <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                    <a class="dropdown-item" role="presentation" href="toevoegen.php"><i
                                                class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profiel</a>
                                    <a
                                            class="dropdown-item" role="presentation" href="update-maker.php"><i
                                                class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Updates</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" role="presentation" href="logout.php"><i
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
                            <div class="col-md-8">
                                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                                    <h3 class="text-dark mb-0">Dashboard</h3>
                                </div>
                                <p>Welkom bij het admin-paneel. Hier kun je als admin het volgende doen: </p>
                                <ul>
                                    <li>Het <a style="color: darkgreen;" href="songofday.php">nummer van
                                            de dag</a>
                                        toevoegen / verwijderen
                                    </li>
                                    <li>Een <a style="color: darkgreen;" href="update-maker.php">update</a> over de
                                        website
                                        toevoegen / verwijderen
                                    </li>
                                    <li>Een <a style="color: darkgreen;" href="toevoegen.php">nieuwe admin</a>
                                        toevoegen
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 text-right">
                                <h6>Datum en tijd: <br> <span id="time-home"></span></h6>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-6"><br>
                                <?php
                                include_once('config.php');
                                $resultsong = mysqli_query($link, "SELECT * FROM songofday ORDER BY id DESC");
                                $row = mysqli_fetch_array($resultsong);
                                ?>
                                <p>Het laatste nummer van de dag</p>
                                <table class="table" style="color: black">
                                    <tr>
                                        <th scope="col">Item</th>
                                        <th scope="col">Datum</th>
                                    </tr>
                                    <tbody>
                                    <tr>
                                        <td scope="row"><?php echo $row["songname"] ?></td>
                                        <td scope="row">
                                            <?php echo $row["uploaddate"]; ?>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <?php include_once 'config.php';
                            $result = mysqli_query($link, "SELECT * FROM posts ORDER BY id DESC");
                            ?>
                            <div class="col-lg-6"><br>
                                <p>De laatste update op de website</p>
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
                                        <td><?php echo $row["title"]; ?></td>
                                        <td><?php echo $row["date"]; ?></td>
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
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Het Platenhuis 2020</span></div>
            </div>
        </footer>
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="./assets/js/theme.js"></script>
</body>

</html>