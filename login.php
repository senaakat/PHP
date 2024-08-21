<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LESSON</title>
</head>

<body>

<?php

$kAdi="sena";
$kPass="1234";
echo $_POST["kullanici_ad"];
echo "<br>";
echo $_POST["kullanici_pass"];

// if($_POST["kullanici_ad"]==$kAdi && $_POST["kullanici_pass"]==$kPass){
//     echo "Giriş Başarılı";
// }else{
//     echo "Giriş Başarısız";
// }

//kısa if kullanımı

  echo ($_POST["kullanici_ad"]==$kAdi && $_POST["kullanici_pass"]==$kPass) ? "Giriş Başarılı" : "Giriş Başarısız";

?>
<h1>Kullanıcı Girişi</h1>

    <form action="" method="POST">
        Kullancı Adı<input type="text" name="kullanici_ad" placeholder="Kullanıcı Adını Giriniz...">
        Şifre<input type="password" name="kullanici_pass" placeholder="Şifrenizi Giriniz">
        <button type="submit">Giriş Yap</button>
    </form>

</body>

</html>