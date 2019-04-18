<?php
    $wartosc_brutto = $_POST['wartosc_brutto'];
    $kwota_zaplacona = $_POST['kwota_zaplacona'];
    $reszta = $kwota_zaplacona - round($wartosc_brutto, 2);


    echo "Zapłacono: ". $kwota_zaplacona. "</br>";
    echo "Wartość: ". round($wartosc_brutto, 2). "</br>";
    echo "Reszta: ". $reszta. "</br>";
    
?>