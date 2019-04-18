<?php

$wyrazenie = '/^[a-z]*$/';
$tekst = 'przykladowytekst';

//preg_match() sprawdza wystepowanie wyrazenia
if(preg_match($wyrazenie, $tekst))
    echo ("Tekst zawiera tylko małe litery bez polskich znaków");
else
    echo ("Tekst zawiera dodatkowe znaki");

?>

<?php

$imie = 'Michał'; //$_POST['imie'];
$nazwisko = 'Król'; //$_POST['nazwisko'];

$sprawdz = '/^[A-ZŁŚ][a-ząęółśżźćń]*$/';

if(preg_match($sprawdz, $imie))
{
    if(preg_match($sprawdz, $nazwisko)) {
        echo("Podano poprawne dane ");
        echo("\nImię i nazwisko: ".$imie ." ".$nazwisko);
    }
    else
        ("Błędne nazwisko");
}
else
    echo ("Błędne imię");

?>

<?php

$email = "krol.michal99@gmail.com"; //$_POST('email');

$sprawdz = '/^[a-zA-Z0-9.\-_]*@[a-zA-Z0-9\-.]*\.[a-zA-Z]{2,}$/';

if (preg_match($sprawdz, $email)) {
    echo("Podano prawidłowy adres e-mail");
    echo ("\nE-mail: ".$email);
}
else
    echo ('Adres e mail jest nieprawidłowy');

?>