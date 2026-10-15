<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./" method="POST">

        <label for="login">Login: </label>
        <input type="text" id="login" name="login"><br>
        <label for="E-mail">E-mail: </label>
        <input type="email" id="e-mail" name="e-mail"><br>
        <label for="hasło">Login: </label>
        <input type="text" id="hasło" name="hasło"><br>
        <label for="wiek">wiek: </label>
        <input type="number" id="wiek" name="wiek"><br>
        <input type="checkbox" name="regulamin" value="akceptacja">zaakceptuj regulamin<br>
        <br>
        <input type="submit" value="Zarejestruj się">

    </form>
</body>

</html>
<?php

$login = $_POST['login'];
$email = $_POST['e-mail'];
$haslo = $_POST['hasło'];
$wiek = $_POST['wiek'];
$regulamin = $_POST['regulamin'];


if(strlen($login) > 3) {
    echo "login poprawny<br>";
} else {
    echo "login musi mieć minimum 3 znaki";
}

if(str_contains($email,"@")) {
    echo "email poprawny<br>";
} else {
    echo "email musi mieć @";
}

if(strlen($haslo) > 7){
    echo "haslo poprawne<br>";
} else {
    echo "haslo musi miec minimu 8 znakow";
}
if(isset($regulamin)) {
 echo "regulamin zaakceptowany";
} else {
    echo "musisz zaakceptować regulamin";
}



?>