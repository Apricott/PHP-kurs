<?php
define("KOSZULKA", 14.99); //cena koszulki jako stała
define("SPODNIE", 45.99); //cena spodni jako stała
define("CZAPKA", 9.63); //cena czapki jako stała
define("BUTY", 73.99); //cena butów jako stała
define("P_VAT", 0.23); // wysokość VAT

//przypianie zmiennych formularza
$ile_koszulki = $_POST['koszulki'];
$ile_spodnie = $_POST['spodnie'];
$ile_czapki = $_POST['czapki'];
$ile_buty = $_POST['buty'];

//formularz zamówienia
$imie_nazwisko = $_POST['imie_nazwisko'];
$adres = $_POST['adres'];
$email = $_POST['email'];

//wartoć netto zamówionych przedmiotów
$kwota_koszulki_netto = $ile_koszulki * KOSZULKA;
$kwota_spodnie_netto = $ile_spodnie * SPODNIE;
$kwota_czapki_netto = $ile_czapki * CZAPKA;
$kwota_buty_netto = $ile_buty * BUTY;

//cena netto całego zamówienia
$kwota_zamówienia_netto = $kwota_koszulki_netto + $kwota_spodnie_netto + $kwota_czapki_netto + $kwota_buty_netto;

//wartość brutto
$kwota_koszulki_brutto = $kwota_koszulki_netto + $kwota_koszulki_netto * P_VAT;
$kwota_spodnie_brutto = $kwota_spodnie_netto + $kwota_spodnie_netto * P_VAT;
$kwota_czapki_brutto = $kwota_czapki_netto + $kwota_czapki_netto * P_VAT;
$kwota_buty_brutto = $kwota_buty_netto + $kwota_buty_netto * P_VAT;

//cena zamówienia brutto
$kwota_zamówienia_brutto = $kwota_koszulki_brutto + $kwota_spodnie_brutto + $kwota_czapki_brutto + $kwota_buty_brutto;



?>

<html>
    <head>
        <title>Obsługa zamówienia</title>
    </head>
    <body>
        <?php
            
            echo "Cena netto zamówionych koszulek: ". $kwota_koszulki_netto. "<br/>";
            echo "Cena netto zamówionych spodni: ". $kwota_spodnie_netto. "<br/>";
            echo "Cena netto zamówionych czapek: ". $kwota_czapki_netto. "<br/>";
            echo "Cena netto zamawianych butów". $kwota_buty_netto. "</br>";
            echo "Wartosć netto całego zamówienia: ". $kwota_zamówienia_netto. "</br>";
            echo "Cena brutto zamówionych koszulek: ". round($kwota_koszulki_brutto, 2). "</br>";
            echo "Cena brutto zamówionych spodni: ". round($kwota_spodnie_brutto, 2). "</br>";
            echo "Cena brutto zamówionych czapek: ". round($kwota_czapki_brutto, 2). "</br>";
            echo "Cena brutto zamawianych butów". round($kwota_buty_brutto, 2). "</br>";
            echo "Wartosć brutto całego zamówienia: ". round($kwota_zamówienia_brutto, 2). "</br>";
            echo "</br>";
            echo "</br>";
            echo "</br>";
            echo "</br>";
            echo "Dane zamawiającego". "</br>";
            echo "Imię i nazwisko: ". $imie_nazwisko. "</br>";
            echo "Adres: ". $adres. "</br>";
            echo "E-mail: ". $email. "</br>"; 
        ?>


        <!-- formularz zapłaty -->
        <form action="kasa.php" method="POST">
            Kwota zapłacona: <input type="text" name="kwota_zaplacona" size=3 maxsize=3 />
            <input type="hidden" name="wartosc_brutto" value="<?php echo $kwota_zamówienia_brutto?>" /> 
        </form> 
    </body>
</html>    

