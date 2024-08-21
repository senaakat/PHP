<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
echo $_POST["ad"];
echo "<br>";
echo $_POST["soyad"];
$kullanici_id=151;
?>

    <form action="" method="POST">
        Ad<input type="text" name="ad" placeholder="Adınızı Giriniz">
        soyad<input type="text" name="soyad" placeholder="Soyadınızı Giriniz">
        <input type="submit" value="Gönder">
    </form>

    <form action="transaction.php" method="GET">
        Ad<input type="text" name="ad" placeholder="Adınızı Giriniz">
        soyad<input type="text" name="soyad" placeholder="Soyadınızı Giriniz">
        <input type="submit" value="Gönder">
    </form>

    <a href="islem.php?kullanici_id=<?php echo $kullanici_id ?>">
        <button>Kullanıcı Sil</button>
    </a>
</body>
</html>