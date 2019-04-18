<?php
    $a = 7;
    if($a%2 > 0) //reszta z dzielenia przez 2
    {
        echo "liczba nieparzysta";
    }
    if ($a%2 == 0) // brak reszty
    {
        echo "Liczba parzysta";
    }
?>

<?php
    $a = 7;
    if ($a%2 > 0) 
        (echo "Liczba nieparzysta");
    else
        (echo "Liczba parzysta");
?>

<?php
    $a = 34;
    if($a%8 == 0)
        (echo "Liczba podzielna przez 8");
    elseif($a%4 == 0)
        (echo "liczba podzielna przez 4, ale nie przez 8");
    elseif($a%2 == 0)
        (echo "Liczba podzielna przez 2, ale nie przez 4");
    else
        (echo "Liczba nieparzysta");
?>

<?php
    $a = 72;
    switch ($a) // sprawdzamy zmienną $a
        {
        case 1:
            echo "Wartość zmiennej a to 1";
            break;
        case 2:
            echo "Wartość zmiennej a to 2";
            break;

        case 3:
            echo "Wartość zmiennej a to 3";
            break;

        case 72:
            echo "Wartość zmiennej a to 72";
            break;

        default:
            echo "Żadna z powyższych";
            break;
        }
?>

