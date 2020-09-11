<?php
/*
 * Copyright © 2020 bij Het Platenhuis en Cedric Fortuin. Niks uit deze website mag zonder toestemming gebruikt, gekopieerd en/of verwijderd worden. Als je de website gebruikt ga je akkoord met onze gebruiksvoorwaarden en privacy.
 */

$MY_PROFILE_PICTURE = $_FILES['profile_picture'] ['tmp_name'];

$file = fopen($MY_PROFILE_PICTURE, 'r');
$file_contents = fread($file, filesize($MY_PROFILE_PICTURE));
fclose($file);

$file_contents = addslashes($file_contents);

include_once '../config.php';
mysqli_query($link , "INSERT INTO users SET USER_IMAGE='$file_contents'") or die("MySQL query Error: " . mysqli_error());
mysqli_close();
echo "Added successfully";
echo "This is the image";
$resultsong = mysqli_query($link, "SELECT * FROM users ORDER BY USER_ID DESC");
$row = mysqli_fetch_array($resultsong);

echo $row['USER_IMAGE'];
