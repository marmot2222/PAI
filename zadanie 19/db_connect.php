<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "";

    $connection = mysqli_connect($host, $user, $password, $database);

    if (!$conn) {
        die("połączenie się nie powiedło");
    }

?>