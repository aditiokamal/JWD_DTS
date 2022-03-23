<!--
    Muhammad Aditio Kamal Ibrahim
    201393
-->

<?php
    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "db_sertifikasi";

    // Create connection
    $conn = mysqli_connect ($serverName, $dbUsername, $dbPassword, $dbName);

    // Check connection
    if (!$conn) {
        die("Gagal terkoneksi ke Database: " . mysqli_connect_error());
        }

?>