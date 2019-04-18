<?php
// pętla do ... while

$zmienna = -10;
do // instrukcje do wykonania
{
    echo $zmienna;
    $zmienna--;
}
while($zmienna > 0); // warunek kontynuacji pętli
?>

<?php
// pętla while

while($zmienna < 101)
{
    echo $zmienna;
    $zmienna++;
}
?>

<?php
// pętla for

for($i = 0; $i < 100; $i++)
{
    // instrukcje do wykonania z każdą iteracją
}
?>

<?php
// użycie pętli for

for($i = 0; $i < 10; $i++)
{
    //instrukcje
}

//ten sam efekt z użyciem pętli while
$i=0;
while ($i < 10)
{
    //instrukcje
    $i++;
}

?>

