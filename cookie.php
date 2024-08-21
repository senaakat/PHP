<?php

//cookie nasıl oluşturulur
$adSoyad="Sena AKAT";

setcookie("adSoyad",$adSoyad,time()+3600);

echo $_COOKIE["adSoyad"];


/*
Cooki süre arttırma
strtotime() fonksiyonu ile tarih ve saat bilgisi oluşturulur
strotime(+1 hour) 1 saat ekler
strotime(+1 day) 1 gün ekler
strotime(+1 week) 1 hafta ekler
*/
//cookie nasıl silinir

setcookie("adSoyad","",strtotime("-1 hour"));
?>