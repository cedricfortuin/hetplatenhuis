<?php

/*
 * Copyright © 2020 bij Het Platenhuis en Cedric Fortuin. Niks uit deze website mag zonder toestemming gebruikt, gekopieerd en/of verwijderd worden. Als je de website gebruikt ga je akkoord met onze gebruiksvoorwaarden en privacy.
 */

/* Attempt to connect to MySQL database */

//This link is for the database from Het Platenhuis
//$link = mysqli_connect('localhost:3306', 'DatabaseLogin-Platenhuis', 'd2rdS2t0&XBKEJO$4o^Cke3e6LBA6w', 'DATABASE_PLATENHUIS');

//This link is for the local host
$link = mysqli_connect('localhost', 'root', 'root', 'hetplatenhuis' );

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
