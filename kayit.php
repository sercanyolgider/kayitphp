<?php

include("ayar.php");


$adsoyad = $_POST["adi"];
$kullaniciadi = $_POST["kadi"];
$parola = $_POST["pass"];
$mail = $_POST["mail"];

$add = mysql_query("INSERT INTO uyeler(adi,kadi,parola,mail) VALUES('$adsoyad','$kullaniciadi','$parola','$mail')");

if ($add)
{
    echo "Ekleme islemi Basarili Bir sekilde Gerceklestirildi";
}
else
{
    echo "Hata";
}




?>