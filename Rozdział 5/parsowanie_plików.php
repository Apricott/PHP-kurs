<?php

//instrukcja fopen
$uchwyt = fopen("style.css", "w");

//usuniecie pliku
unlink("style.css");

?>

<?php

// uchwyt do pliku
$plik = fopen('index.html', 'r');
$zawartosc  = fread($plik, 8192);

echo $zawartosc;
?>

<?php

$plik = fopen("index.html", 'r');
$zawartosc= '';
while(!feof($plik))
{
    $linia = fgetc($plik);
    $zawartosc .= $linia;
}

?>
<?php
$plik = fopen('index.html','a');
$zawartosc = "Przykładowa treść, którą umieścimy w pliku.";
$zawartosc .= "Utniemy treść po 50 znakach";
fwrite($plik, $zawartosc, 50);
?>



