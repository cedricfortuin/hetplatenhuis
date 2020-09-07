<?php

/* Attempt to connect to MySQL database */

//This link is for the database from Het Platenhuis
//$link = mysqli_connect('localhost:3306', 'ADMIN_C', 'Cedric2001', 'database_1');

//This link is for the local host
//$link = mysqli_connect('localhost', 'root', '', 'hetplatenhuis' );

/* TODO
 *      - enable the original link to the database
 *      - /optional/ make a mailclient
 *      - ...
 * */

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
