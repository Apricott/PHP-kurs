<?php

$adres = "przyklad@uzycia.pl";
$tytul = "Tytuł wiadomości";
$wiadomosc = "Treść przykładowej wiadomości wysyłanej bezpośrednio z kodu za pomocą funkcji mail().";

//uzycie funkcji mail()
mail($adres, $tytul, $wiadomosc);

?>

<?php

$od = "From: uzytkownil@kursphp.com \r\n";
$od .= 'MIME-Version: 1.0'."\r\n";
$od .= 'Content-type: text/html; charset=iso-8859-2'."\r\n";

$adres = "przyklad@uzycia.pl";
$tytul = "Tytuł wiadomości";
$wiadomosc = "<html>
<head>
</head>
<body>
    <b>Witam serdecznie!<b><br\>
    Zapraszam na stronę: <a href='http://facebool.com'>Kurs PHP </a>
</body>
</html>";

mail($adres, $tytul, $wiadomosc, $od);

?>


