<?php

$host = "localhost";
$user = "root";     
$pass = "";         
$dbname = "gry_db";

$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die("Błąd połączenia z MySQL: " . mysqli_connect_error());
}


if (!mysqli_select_db($conn, $dbname)) {
    
}
?>
