<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //for döngüsü
    for($i=0;$i<10;$i++){
        echo $i;
        echo "<br>";
    }

    //while döngüsü
    $say=10;
    while($say<=10){ 
        $say++;  
        echo $saya;
    }

    // foreach döngüsü
    $dizi=array("Elma","Armut","Muz","Kiraz");
    foreach($dizi as $meyve){
        echo $meyve;
        echo "<br>";
    }
    ?>
</body>
</html>