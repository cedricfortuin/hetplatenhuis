<?php
// Initialize the session

/*
 * Copyright © 2020 bij Het Platenhuis en Cedric Fortuin. Niks uit deze website mag zonder toestemming gebruikt, gekopieerd en/of verwijderd worden. Als je de website gebruikt ga je akkoord met onze gebruiksvoorwaarden en privacy.
 */

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
    <title>UPDATES - <?php echo $_SESSION['username'] ?></title>
    <link rel="shortcut icon" href="./assets/img/functional/song.png" type="image/x-icon"/>
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
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.php"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="toevoegen.php"><i
                                class="fas fa-user-edit"></i><span>Toevoegen</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="huidige-profielen.php"><i
                                class="fas fa-user"></i><span>Profielen</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="update-maker.php"><i
                                class="far fa-edit"></i><span>Updates</span></a><a class="nav-link"
                                                                                   href="songofday.php"><i
                                class="fab fa-spotify"></i><span>Nummer van de Dag</span></a><a class="nav-link"
                                                                                                href="logout.php"><i
                                class="far fa-user-circle"></i><span>Logout</span></a></li>
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
                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                                                            data-toggle="dropdown" aria-expanded="false"
                                                                            href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu"
                                 aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small"
                                                                    type="text" placeholder="Search for ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary py-0" type="button"><i
                                                        class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                                                       data-toggle="dropdown" aria-expanded="false"
                                                                       href="#"><span
                                            class="d-none d-lg-inline mr-2 text-center text-gray-600 small"><?php echo "Welkom " . $_SESSION['username']; ?><p
                                                id="time-home"></p></span></a>
                                <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                    <a class="dropdown-item" role="presentation" href="toevoegen.php"><i
                                                class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profielen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" role="presentation" href="logout.php"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <section class="content-section" style="color: black;">
                <div class="container">
                    <div class="col-md-12 mx-auto">
                        <div class="d-sm-flex justify-content-between align-items-center mb-4">
                            <h3 class="text-dark mb-0">Updates</h3>
                        </div>
                        <div>
                            <p>Zie hier de huidige updates op de site</p>
                        </div>
                        <div class="form">
                            <form action="inject-blogpost.php" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Titel</label>
                                        <input type="text" class="form-control" name="title" id="inputName"
                                               autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCompany">Auteur</label>
                                        <input type="text" class="form-control" name="author" id="inputCompany"
                                               autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail">Tekst om weer te geven</label>
                                        <textarea style="resize: none;height: 250px; width: auto;" type="text" class="form-control" name="text"
                                                  id="inputEmail" autocomplete="off"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Uploaden</button>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <br><br>
            <section class="content-section">
                <?php
                include_once '../config.php';
                $result = mysqli_query($link, "SELECT * FROM posts ORDER BY POST_ID DESC")
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <table class="table" style="color:black;">
                                <tr>
                                    <th scope="col">Titel</th>
                                    <th scope="col">Auteur</th>
                                    <th scope="col">Datum</th>
                                    <th scope="col">Tekst</th>
                                    <th scope="col"></th>
                                </tr>
                                <?php
                                $i = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tbody style="color: black">
                                <tr>
                                    <td><?php echo $row["POST_TITLE"]; ?></td>
                                    <td><?php echo $row["POST_TEXT"]; ?></td>
                                    <td><?php echo $row["UPLOAD_DATE"]; ?></td>
                                    <td><?php echo $row["POST_AUTHOR"]; ?></td>
                                    <td><a style="color: darkgreen;"
                                           href="delete-posts.php?POST_TITLE=<?php echo $row["POST_TITLE"]; ?>">Verwijderen</a>
                                    </td>
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
            </section>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Het Platenhuis 2020</span></div>
            </div>
        </footer>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="./assets/js/theme.js"></script>
</body>

</html>