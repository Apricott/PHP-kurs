<?php
// funkcja bezargumentowa, nie zwracająca wartości
    function wyswietl_powitanie()
    {
        // ciało funkcji
        //instrukcje do wykonania

        echo "Witam serdecznie ";
        echo "Proszę się zarejestrować ";
    }
?>

<?php
// pozostały kod w pliku
wyswietl_powitanie();
// pozostały kod w pliku
wyswietl_powitanie();
wyswietl_powitanie();
// pozostały kod w pliku
?>

<?php
// funkcja zwracająca wartość

function tresc_powitania()
{
    return "Witam wszystkich";
}

$powitanie = tresc_powitania();
echo $powitanie;

?>


<?php

function oblicz()
{
    $zm1 =3;
    $zm1 += 5;
    $zm1++;
    return $zm1;
}

if (oblicz() > 5)
    echo "Funkcja zwraca wartość większą od 5";
else
    echo "Wartość zwracana przez funkcję jest mniejsza od 6";

?>


<?php
// funkcja przyjmująca argumenty

function przywitaj($zmienna_z_imieniem)
{
    echo 'Witaj '.$zmienna_z_imieniem."!";
}

$imie = "Marcin";
przywitaj($imie);

?>

<?php
//funkcje kompleksowo
function kwadrat($liczba)
{
    return $liczba * $liczba;
}

$numer = 5;
$wynik = kwadrat($numer);

echo $wynik;

?>

<?php

function silnia($liczba)
{
    $wynik = 1;
    while ($liczba > 1)
    {
        $wynik *= $liczba;
        $liczba--;
    }
    return $wynik;
}
echo silnia(4);

?>

<?php
// funkcje rekurencyjne
function silnia2($liczba)
{
    if($liczba < 2)
        return 1;
    else
        return $liczba*silnia2($liczba-1);
}

echo silnia(5);

?>