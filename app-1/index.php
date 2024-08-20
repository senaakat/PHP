<?php

const title= "Popüler Diller";

$kurs1_baslik="PHP Kursu";
$kurs1_altbaslik="Sıfırdan ileri seviye PHP";
$kurs1_resim="photo1.png";
$kurs1_yayinTarihi="01.11.2023";
$kurs1_yorumSayisi="100";
$kurs1_begeniSayisi="300";
$kurs1_url=str_replace([" "],["-"],strtolower($kurs1_baslik));

$kurs2_baslik="Java Kursu";
$kurs2_altbaslik="Sıfırdan ileri seviye Java";
$kurs2_resim="photo2.png";
$kurs2_yayinTarihi="21.01.2023";
$kurs2_yorumSayisi="300";
$kurs2_begeniSayisi="500";
$kurs2_url=str_replace([" "],["-"],strtolower($kurs2_baslik));

$kurs3_baslik="React Kursu";
$kurs3_altbaslik="Sıfırdan ileri seviye React";
$kurs3_resim="photo3.png";
$kurs3_yayinTarihi="01.12.2023";
$kurs3_yorumSayisi="400";
$kurs3_begeniSayisi="800";
$kurs3_url=str_replace([" "],["-"],strtolower($kurs3_baslik));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
        <h1 class="mb-3"><?php echo title; ?></h1>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs1_resim;?>" <?php echo $kurs1_resim; ?> alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="col-9">
                        <div class="card-body">
                            <h5 class="card-title">
                            <a href="<?php echo $kurs1_url;?>">
                               <?php echo $kurs1_baslik;?>
                            </a>    
                            </h5> 
                            <p class="card-text"><?php echo $kurs1_altbaslik;?> </p>
                            <p>
                            <span class="badge rounded-pill text-bg-danger">
                                Beğeni:<?php echo $kurs1_begeniSayisi;?>
                            </span>
                            <span class="badge rounded-pill text-bg-primary">
                                Yayın Tarihi:<?php echo $kurs1_yayinTarihi;?>
                            </span>
                            <span class="badge rounded-pill text-bg-success">
                                Yorum Sayısı <?php echo $kurs1_yorumSayisi;?>
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src= "img/<?php echo $kurs2_resim;?>" alt=""  class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="col-9">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?php echo $kurs2_url;?>">
                               <?php echo $kurs2_baslik;?>
                            </a> 
                        </h5>
                            <p class="card-text"><?php echo $kurs2_altbaslik;?> </p>
                            <p>
                            <span class="badge rounded-pill text-bg-danger">
                                Beğeni:<?php echo $kurs2_begeniSayisi;?>
                            </span>
                            <span class="badge rounded-pill text-bg-primary">
                                Yayın Tarihi:<?php echo $kurs2_yayinTarihi;?>
                            </span>
                            <span class="badge rounded-pill text-bg-success">
                                Yorum Sayısı <?php echo $kurs2_yorumSayisi;?>
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs3_resim;?>" <?php echo $kurs3_resim ?> alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="col-9">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?php echo $kurs3_url;?>">
                                <?php echo $kurs3_baslik;?>
                            </a> </h5>
                            <p class="card-text"><?php echo $kurs3_altbaslik?> </p>
                            <p>
                            <span class="badge rounded-pill text-bg-danger">
                                Beğeni:<?php echo $kurs3_begeniSayisi?>
                            </span>
                            <span class="badge rounded-pill text-bg-primary">
                                Yayın Tarihi:<?php echo $kurs3_yayinTarihi?>
                            </span>
                            <span class="badge rounded-pill text-bg-success">
                                Yorum Sayısı: <?php echo $kurs3_yorumSayisi?>
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        
    </div>
</body>
</html>