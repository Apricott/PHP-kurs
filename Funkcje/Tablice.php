<?php
//tablice jednowymiarowe
$tablica[0] = 1;
$tablica[1] = 4;
$tablica[2] = 1;
$tablica[3] = 0;

for ($i = 0; $i <4; $i++)
    echo $tablica[$i]. " ";

?>

<?php
$pewna_zmienna = X;
$j = 0;
$i = 1;
while ($i <= $pewna_zmienna)
{
    if($i % 4 == 0)
    {
        $tablica[$j] = $i;
        $j++;
    }
    $i++;
}

for ($i = 0; $i <$j; $i++)
    echo $tablica[$i]."<br/>";
?>

<?php
// tablice wielowymiarowe

$tablica_ucznia['imie'] = "Janek";
$tablica_ucznia['nazwisko'] = "Kowalski";
$tablica_ucznia['data_ur'] = "14-10-1995";

$tablica_klasy[0] = $tablica_ucznia;

$tablica_ucznia['imie'] = "Krzysiek";
$tablica_ucznia['nazwisko'] = "Nowak";
$tablica_ucznia['data_ur'] = "24-12-1994";

$tablica_klasy[1] = $tablica_ucznia;

$tablica_ucznia['imie'] = "Ewa";
$tablica_ucznia['nazwisko'] = "Kowalska";
$tablica_ucznia['data_ur'] = "17-03-1996";

$tablica_klasy[2] = $tablica_ucznia;

echo $tablica_klasy[1]['imie'];

?>

<?php
$data = date("y-m-d, H:i", mktime (0,0,0,10,15,1985));
echo $data;
?>
