<?php
// Initialize the session

/*
 * Copyright © 2020 bij Het Platenhuis en Cedric Fortuin. Niks uit deze website mag zonder toestemming gebruikt, gekopieerd en/of verwijderd worden. Als je de website gebruikt ga je akkoord met onze gebruiksvoorwaarden en privacy.
 */

session_start();
include('config/config.php');
$new_sql = mysqli_query($link,  "SELECT * FROM users WHERE USER_ID ='". $_SESSION['id'] ."'");
$username = mysqli_fetch_array($new_sql);

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

if($username['USER_ROLE'] != 1)
{
    header("location:no-permission.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PROFIELEN - <?php echo $username['USER_FIRSTNAME'] ?></title>
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
                <li class="nav-item" role="presentation"><a class="nav-link active" href="huidige-profielen.php"><i
                                class="fas fa-user"></i><span>Profielen</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="newsletter-users.php"><i
                                class="fas fa-newspaper"></i><span>Nieuwsbrief</span></a></li>
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
                                            class="d-none d-lg-inline mr-2 text-center text-gray-600 small"><?php echo "Welkom " . $username['USER_FIRSTNAME']; ?><p
                                                id="time-home"></p></span></a>
                                <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                    <a class="dropdown-item" role="presentation" href="own-profile.php"><i
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
            <section class="content-section">
                <?php
                $result = mysqli_query($link, "SELECT * FROM users ORDER BY USER_ID ASC")
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                                <h3 class="text-dark mb-0">Profielen</h3>
                            </div>
                            <div>
                                <p>Zie hier de huidige gebruikers</p>
                            </div>
                            <table class="table" style="color:black;">
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Gebruikersnaam</th>
                                    <th scope="col">Voornaam</th>
                                    <th scope="col">Upload datum</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                                <?php
                                $i = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tbody style="color: black;">
                                <tr>
                                    <td><?php echo $row["USER_EMAIL"]; ?></td>
                                    <td><?php echo $row["USERNAME"]; ?></td>
                                    <td><?php echo $row["USER_FIRSTNAME"]; ?></td>
                                    <td><?php echo $row["USER_CREATED_AT"]; ?></td>
                                    <td><a
                                           href="edit-profiles.php?USER_FIRSTNAME=<?php echo $row["USER_FIRSTNAME"]; ?>">Bewerken</a></td>
                                    <td><a
                                           href="delete-admin.php?USER_ID=<?php echo $row["USER_ID"]; ?>">Verwijderen</a>
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
        </div>
<?php include '_layouts/_layout-footer.php' ?>