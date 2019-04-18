<?php
// kolor trzeba by w html, na nic tu php
$i=1;
while ($i <= 10) {
    for ($j = 1; $j <= 10; $j++)
        $wynik = $i * $j;
        if ($wynik%2 == 0) {
            echo $wynik . " ";
            echo "<br/>";
        }
        else {
            echo $wynik . " ";
            echo "<br/>";
        }
    $i++;
}
?>

<?php
$i = 2;
switch ($i) {
    case 2:
        for ($j = 1; $j <= 10; $j++)
            echo $j * $j . " ";
            echo "<br/>";
        break;

    case 3:
        for ($j = 1; $j <= 10; $j++)
            echo $j * $j * $j . " ";
            echo "<br/>";
        break;

    case 4:
        for ($j = 1; $j <= 10; $j++)
            echo $j * $j * $j * $j . " ";
            echo "<br/>";
        break;
}
?>