<?php
//session nasıl oluşturulur
//ilk olarak session_start() fonksiyonu ile session başlatılır
// ob_start() fonksiyonu ile sayfa başlatılır
ob_start();
session_start();

echo $_SESSION['AdSoyad']="Sena AKAT";
echo "<br>";
echo $_SESSION["il"]="İstanbul";

//session nasıl silinir
unset($_SESSION["AdSoyad"]);
session_destroy();
?>