<?php include '_layouts/_layout-header.php'?>
            <div class="container-fluid">
                <section class="content-section" style="color: black;">
                    <?php
                    /* Attempt MySQL server connection. Assuming you are running MySQL
                    server with default setting (user 'root' with no password) */
                    include_once '../config.php';

                    // Check connection
                    if ($link === false) {
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }

                    // Escape user inputs for security
                    $title = mysqli_real_escape_string($link, $_REQUEST['title']);
                    $author = mysqli_real_escape_string($link, $_REQUEST['text']);
                    $text = mysqli_real_escape_string($link, $_REQUEST['author']);

                    // Attempt insert query execution
                    $sql = "INSERT INTO posts (POST_TITLE, POST_AUTHOR, POST_TEXT) VALUES ('$title', '$author', '$text')";
                    if (mysqli_query($link, $sql)) {
                        echo "<div class='col-md-10 mx-auto alert alert-success text-center'>De update is succesvol toegevoegd. Ga terug.</div>";
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </section>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Het Platenhuis 2020</span></div>
            </div>
<?php include '_layouts/_layout-footer.php'?>