<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/." method="POST">
    <label for="imie">imie</label>
    <input type="text" id = "imie" name = "imie" >

<input type="submit" onclick="kliknij()" >
    </form>

</body>
</html>







<?php



function kliknij() {
    $imie = $_POST["imie"];
 echo "Witaj, ". $imie . "!";
}

kliknij();

?>