<?php

/* Attempt to connect to MySQL database */

//This link is for the database from Het Platenhuis

/*
 * Copyright © 2020 bij Het Platenhuis en Cedric Fortuin. Niks uit deze website mag zonder toestemming gebruikt, gekopieerd en/of verwijderd worden. Als je de website gebruikt ga je akkoord met onze gebruiksvoorwaarden en privacy.
 */

$link = mysqli_connect('localhost:3306', 'DatabaseLogin-Platenhuis', 'Du2wfBtfqUq00FZgso8C', 'DATABASE_PLATENHUIS');

//This link is for the local host
//$link = mysqli_connect('localhost', 'root', 'root', 'hetplatenhuis' );

// Check connection
if (!$link) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
