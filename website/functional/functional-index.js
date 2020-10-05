/*
 * Copyright © 2020 bij Het Platenhuis en Cedric Fortuin. Niks uit deze website mag zonder toestemming gebruikt, gekopieerd en/of verwijderd worden. Als je de website gebruikt ga je akkoord met onze gebruiksvoorwaarden en privacy.
 */

function makeSearchBar() {
    // Declare variables
    let input, filter, div, a, p, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("bandsGallery");
    a = div.getElementsByTagName("a");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < a.length; i++) {
        p = a[i].getElementsByTagName("p")[0];
        if (p) {
            txtValue = p.textContent || p.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
}

