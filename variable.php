<?php

$maasAli=25000;
$maasMehmet=25520;
$maasEda=21450;
$maasArif=21600;
$maasAbdullah=21700;

echo $maasAli-($maasAli*0.27);
echo "<br>";
echo $maasMehmet-($maasMehmet*0.27);
echo "<br>";
echo $maasEda-($maasEda*0.27);
echo "<br>";
echo $maasArif-(2000 -($maasArif*50000 *0.2));
echo "<br>";
echo $maasAbdullah-($maasAbdullah*0.27);

$urunAdi= "PC";
echo $urunAdi.':',gettype($urunAdi);

echo "<br>";

$fiyat= 4000;

echo "<br>";

echo $fiyat.':',gettype($fiyat);

echo "<br>";

//stringi integera çevirme
$a= (int)"20A";
echo(gettype($a));
echo($a);

echo "<br>";

$a= (string)4000;
echo(gettype($a));
echo($a);

?>