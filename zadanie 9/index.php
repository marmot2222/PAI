<?php
$a = 8; // zmienna
define("PI", 3.14); // stała


// zmienne superglobalne (tablcia asocjacyjna)
// $_POST   
// $_GET
// $_SESSION 

$_POST["name"] = "gracjan";

// Metoda HTTP - GET(pobieranie), POST(wysyłanie), PUT(aktualizacja), DELETE(usuwa)

// Różnica GET i POST -  gdy używamy GET gdy mamy adres strony localhost 8080/index.php? będziemy mieli name = Bartek & surname = Dettlaf przy adresie
// echo $_GET["imie"] wyświetli Bartek
// GET gdy informacja nie musi być poufna

// Request - zapytanie, Respond - odpowiedź
?>