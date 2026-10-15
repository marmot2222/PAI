<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./" method="POST">

        <label for="imie">imię: </label>
        <input type="text" id="imie" name="imie"><br>
        <label for="wiek">Wiek: </label>
        <input type="number" id="wiek" name="wiek"><br>

        <select name="bilet" id="bilet">
            <option value="Normalny">Normalny</option>
            <option value="Ulgowy">Ulgowy</option>
        </select>
        <br>
        <input type="submit" value="Oblicz cene">
    
    </form>
</body>

</html>
<?php

$imie = $_POST['imie'];
$wiek = $_POST['wiek'];
$bilet = $_POST['bilet'];

if($wiek < 7) {
    $cena = 0;
} elseif ($bilet == "Ulgowy") {
    $cena = 15;
} else {
    $cena = 30;
}

echo "czesc $imie,<br>";
echo "Twoj wiek: $wiek <br>";
echo "rodzaj biletu $bilet <br>";
echo "cena biletu: $cena"

?>