<?php

/* Attempt to connect to MySQL database */
$link = mysqli_connect('localhost:3306', 'ADMIN_C', 'Cedric2001', 'database_1');

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
