<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $email = $_POST["email"];
    $temat = $_POST["temat"];
    $wiadomosc = $_POST["wiadomosc"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Niepoprawny email!";
        exit;
    }

    $dane = "$imie | $nazwisko | $email | $temat | $wiadomosc\n";
    file_put_contents("dane.txt", $dane, FILE_APPEND);

    echo "Zapisano!";
}
?>