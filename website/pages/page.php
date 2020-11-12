<?php
/*
 * Copyright © 2020 bij Het Platenhuis en Cedric Fortuin. Niks uit deze website mag zonder toestemming gebruikt, gekopieerd en/of verwijderd worden. Als je de website gebruikt ga je akkoord met onze gebruiksvoorwaarden en privacy.
 */


include 'layouts/default-php.php';

$uuid = $_GET['page_uuid'];

$getDiscoData = $ConnectionLink->query("SELECT * FROM discography WHERE ARTIST_UUID = '$uuid'");
$getPageDataArray = $ConnectionLink->query("SELECT * FROM artist_info WHERE ARTIST_UUID = '$uuid'")->fetch_array();


include "layouts/_layout-head.phtml";

include "layouts/_layout-navbar.phtml";

include "layouts/_layout-header.phtml";

include "layouts/_layout-content.phtml";

include "layouts/_layout-footer.phtml";

include "layouts/_layout-downer.phtml";
