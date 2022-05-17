<?php 
    $conn = mysqli_connect("191.101.185.204", "dbproj1", "1910511106000", "urmoodco_project6");
    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error());
    }
    $conn->set_charset("utf8");
?>
