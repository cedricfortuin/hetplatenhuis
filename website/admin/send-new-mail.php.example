<?php
/*
 * Copyright © 2020 bij Het Platenhuis en Cedric Fortuin. Niks uit deze website mag zonder toestemming gebruikt, gekopieerd en/of verwijderd worden. Als je de website gebruikt ga je akkoord met onze gebruiksvoorwaarden en privacy.
 */
include_once '../config.php';
if ($link === false) {
    die("ERROR: Could not connect. ". mysqli_error($link));
}
//$to = mysqli_query($link, "SELECT USER_EMAIL FROM newsletter");

// Escape input for security
//$firstname = mysqli_query($link, "SELECT USER_NAME FROM newsletter");

/*$current_admin = mysqli_real_escape_string($link, $_REQUEST['<?php echo $admin_item["FIRSTNAME"]?>']);*/
$subject = mysqli_real_escape_string($link, $_REQUEST['mail-subject']);
$made_message = mysqli_real_escape_string($link, $_REQUEST['mail-text']);
$to = 'info@cedricfortuin.com';
$firstname = 'Cedric';
$from = 'Het Platenhuis <info@hetplatenhuis.nl>';

$host = 'smtp.strato.com';
$username = 'info@hetplatenhuis.nl';
$password = '7h6ii9C&';
$headers = $from;
$smtp = array (
    'smtp', array (
        'host'=>$host,
        'auth'=> true,
        'username'=>$username,
        'password'=>$password
    )
);

mail($to, $headers, $made_message);


//mail($to, $subject, $made_message, $headers);
//
//if (mail($to, $subject, $made_message, $headers)) {
//    print "Email sent successfully";
//} else {
//    print "Email did not send";
//}