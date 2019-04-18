<?php

echo "Dzień urodzenia: ";

function wypisz_dzien_tygodnia($data)
{
    $dzentyg = date("w", mktime(0,0,0,$data['miesiac'], $data['dzien'], $data['rok']));

    switch ($dzentyg)
    {
        case 0:
            echo "Niedziela";
            break;
        case 1:
            echo "Poniedziałek";
            break;
        case 2:
            echo "Wtorek";
            break;
        case 3:
            echo "Środa";
            break;
        case 4:
            echo "Czwartek";
            break;
        case 5:
            echo "Piątek";
            break;
        case 6:
            echo "Sobota";
            break;
    }
}

function oblicz_dni($data)
{
    $czas = (time() - mktime(0, 0, 0, $data['miesiac'], $data['dzien'], $data['rok']))/60/60/24;
    return $czas;
}
function pelnoletnosc($data)
{
    $tak = "Użytkownik jest pełnoletni <br/>";
    $nie = "Użytkownik nie jest pełnoletni <br/>";

    $czas = (time() - mktime(0, 0, 0, $data['miesiac'], $data['dzien'], $data['rok']))/60/60/24;

    if ($czas < 6570)
    {
        return $nie;
    }
    else
    {
        return $tak;
    }
}

function wigilia($data)
{
    for($i = 0; $i < 10; ++$i)
    {
        $wigilie[$i] = date("l", mktime(0, 0, 0, 12, 24, $data['rok']));
        $data['rok'] = $data['rok'] - 1;
    }

    return $wigilie;
}


$data['dzien'] = $_GET['dzien'];
$data['miesiac'] = $_GET['miesiac'];
$data['rok'] = $_GET['rok'];

echo wypisz_dzien_tygodnia($data);
echo "<br/>"."Liczba dni od dnia urodzin do teraz: ".oblicz_dni($data)."<br/>";
echo pelnoletnosc($data)."<br/>";

$wigilie = wigilia($data);
echo "10 ostatnich kalacji wigilijnych odbyło się w: "."<br/>"."<br/>";

for( $x = 0; $x < 10; ++$x ) {
    echo $wigilie[ $x]."<br/>";
}

?>