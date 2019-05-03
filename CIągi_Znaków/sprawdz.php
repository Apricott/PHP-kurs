<?php

function sprawdz_email($email)
{
    $spr = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';
    //$spr2 = '/^[a-zA-Z0-9.\-_]*@[a-zA-Z0-9\-.]*\.[a-zA-Z]{2,}$/';
    if (preg_match($spr, $email))
        return true;
    else
        return false;
}
function sprawdz_imie($imie)
{
    $sprawdz = '/^[a-zA-ZŁŚĆŻŹĄĘÓŃąęółśżźćń]+$/';
    if (preg_match($sprawdz, $imie)){
        $imie = ucwords(strtolower($imie));
        return $imie;
    }
    else
        return false;
}

function sprawdz_telefon($telefon)
{
    $sprawdz = '/^[0-9]{9}$/';
    if (preg_match($sprawdz, $telefon))
        return true;
    else
        return false;
}

function sprawdz_tresc($tresc)
{
    $tresc = trim($tresc);

    if (preg_match('(kurwa|chuj|pierdol)', $tresc)) {
        echo "Tekst zawiera wulgaryzmy; ";
        return false;
    }

    if (strlen($tresc) < 30)
        return false;
    else
        return $tresc;
}

function sprawdz_domene($email){
    $domena = explode("@",$email);
    return $domena[1];
}

$email = $_POST['email'];
$imie = $_POST['imie'];
$tel = $_POST['telefon'];
$tresc = $_POST['tresc'];
$blad_danych = false;

if (!sprawdz_email($email)){
    echo "Adres e-mail niepoprawny; ";
    $blad_danych = true;
}

$imie = sprawdz_imie($imie);
if(!$imie){
    echo "Imię wpisano niepoprawnie; ";
    $blad_danych = true;
}

if (!sprawdz_telefon($tel)){
    echo "Błędny numer telefonu; ";
    $blad_danych = true;
}

$tresc = sprawdz_tresc($tresc);
if (!$tresc){
    echo "Niepoprawna tresc; ";
    $blad_danych = true;

}

$domena = sprawdz_domene($email);

if ($blad_danych){
    echo "Wystąpił jeden lub więcej błędów podczas przetwarzania danych. ";
}
else {
    echo "Imię klienta: $imie;"."<br/>";
    echo "Adres e-mail: $email;"."<br/>";
    echo "Numer telefonu: $tel;"."<br/>";
    echo "Treść: $tresc;"."<br/>";
    echo "Domena: $domena;"."<br/>";
}

$dane[0] = $imie;
$dane[1] = $email;
$dane[2] = $tel;
$dane[3] = $tresc;
$dane[4] = $domena;

$ciag = implode("; ", $dane);

echo "<br/>"."Ciąg: $ciag";

?>