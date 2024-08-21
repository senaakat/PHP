<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// $say=5;

// if($say==5){
//     echo "Sayı 5'e eşittir";
// }
// elseif($say>5){
//     echo "Sayı 5'e eşit değildir";
// }
// else{
//     echo "Sayı 5'e eşit değildir";
// }

// //kısa if kullanımı

// echo $say==5 ? "true" : "false";

// $deger="Elma";

// $sayi=1;

// switch($sayi){
//     case"1":
//         echo "Sayı 1";
//         break;

//     case "10":
//         echo "Sayı 10";
//         break;

//     default:
//         echo "Sayı 1 ve 10 değil";
//         break;
// }

// //pratik switch kullanımı
// // isset() fonksiyonu bir değişkenin tanımlı olup olmadığını kontrol eder


if(isset($_POST["notunuz"])){
    echo "Notunuz:".$not=$_POST["not"]; echo " ";

    switch($not){
        case "1":
            echo "Kaldınız";
            break;
        case "2":
            echo "Kaldınız";
            break;
        
        case "3":
            echo "Kaldınız";
            break;
        
        default:
            echo "Geçtiniz";
            break;
    }

}

?>

<!-- <select>
    <option>Armut</option>
    <option <?php echo $deger=='Elma' ? 'selected' : "" ?>Elma></option>
    <option <?php echo $deger=='Armut' ? 'selected' : "" ?>Armut></option>
</select> -->

<form action="" method="POST">
    Notunuzu Giriniz:<input type="number" max="5" name="not">
    <input type="submit" name="notunuz">
</form>
</body>
</html>