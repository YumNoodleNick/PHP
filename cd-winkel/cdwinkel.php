<?php
include "Cd.php";
include "Album.php";

$artiest = $_POST["artiest"];
$minimum = $_POST["minimumprijs"];
$maximum = $_POST["maximumprijs"];

$cds = new Cd();

$likeacat = new Album("AOA", "Like a Cat", 15, "afbeeldingen/aoa-likeacat.jpg", "audio/aoa-likeacat.mp3");
$heartattack = new Album("AOA", "Heart Attack", 16, "afbeeldingen/aoa-heartattack.jpg", "audio/aoa-heartattack.mp3");
$orul82 = new Album("BTS", "O!RUL8,2?", 15, "afbeeldingen/bts-orul82.jpg", "audio/bts-no.mp3");
$skoolluvaffair = new Album("BTS", "Skool Luv Affair", 18, "afbeeldingen/bts-skoolluvaffair.jpg", "audio/bts-justoneday.mp3");
$darkwild = new Album("BTS", "Dark&Wild", 20, "afbeeldingen/bts-darknwild.jpg", "audio/bts-danger.mp3");
$chowonderful6 = new Album("°C-ute", "Cho Wonderful! 6", 24, "afbeeldingen/cute-chowonderful6.jpg", "audio/cute-kissmeaishiteru.mp3");
$dai7sho = new Album("°C-ute", "Dai 7 Sho", 24, "afbeeldingen/cute-dai7sho.jpg", "audio/cute-momoirosparkling.mp3");
$queenofjpop = new Album("°C-ute", "8 Queen of J-POP", 24, "afbeeldingen/cute-8queenofjpop.jpg", "audio/cute-adamtoevenodilemma.mp3");
$cmaj9 = new Album("°C-ute", "°Cmaj9", 22, "afbeeldingen/cute-cmaj9.jpg", "audio/cute-themiddlemanagement.mp3");
$hippityhop = new Album("EXID", "Hippity Hop", 12, "afbeeldingen/exid-hippityhop.png", "audio/exid-ifeelgood.mp3");
$ahyeah = new Album("EXID", "Ah Yeah", 14, "afbeeldingen/exid-ahyeah.jpg", "audio/exid-ahyeah.mp3");
$hello = new Album("MAMAMOO", "Hello", 12, "afbeeldingen/mamamoo-hello.jpg", "audio/mamamoo-mrambiguous.mp3");
$pinkfunky = new Album("MAMAMOO", "Pink Funky", 14, "afbeeldingen/mamamoo-pinkfunky.jpg", "audio/mamamoo-uhmohahyeah.mp3");
$melting = new Album("MAMAMOO", "Melting", 20, "afbeeldingen/mamamoo-melting.jpg", "audio/mamamoo-yourethebest.mp3");
$touchmove = new Album("SISTAR", "Touch & Move", 17, "afbeeldingen/sistar-touchmove.jpg", "audio/sistar-touchmybody.mp3");
$sweetandsour = new Album("SISTAR", "Sweet & Sour", 17, "afbeeldingen/sistar-sweetandsour.jpg", "audio/sistar-iswear.mp3");
$shakeit = new Album("SISTAR", "Shake It", 17, "afbeeldingen/sistar-shakeit.jpg", "audio/sistar-shakeit.mp3");

$cds->voegAlbumToe($likeacat);
$cds->voegAlbumToe($heartattack);
$cds->voegAlbumToe($orul82);
$cds->voegAlbumToe($skoolluvaffair);
$cds->voegAlbumToe($darkwild);
$cds->voegAlbumToe($chowonderful6);
$cds->voegAlbumToe($dai7sho);
$cds->voegAlbumToe($queenofjpop);
$cds->voegAlbumToe($cmaj9);
$cds->voegAlbumToe($hippityhop);
$cds->voegAlbumToe($ahyeah);
$cds->voegAlbumToe($hello);
$cds->voegAlbumToe($pinkfunky);
$cds->voegAlbumToe($melting);
$cds->voegAlbumToe($touchmove);
$cds->voegAlbumToe($sweetandsour);
$cds->voegAlbumToe($shakeit);

?>

<html>
<head>
  <title>CD winkel</title>
  <? include 'navbar.php'; ?>
  <style>
      .center{
        text-align: center;
      }
      
      .price{
        background-color: #58C9B9;
        color: white;
        position: absolute;
        top: 16px;
        right: 31px;
        padding: 10px;
      }
      
      audio {
        width: 230px;
      }
  </style>
</head>
<body>
    <div class = "container">
        <header>
            <h3> CD winkel </h3>
        </header>
            
            <form action="cdwinkel.php" method="POST">
                <label>Artiest:</label><br>
                <select class="form-control" name="artiest">
                    <option <?php if (isset($artiest) && $artiest=="") echo "selected";?> value="">Alle artiesten</option>
                    <option <?php if (isset($artiest) && $artiest=="AOA") echo "selected";?> value="AOA">AOA</option>
                    <option <?php if (isset($artiest) && $artiest=="BTS") echo "selected";?> value="BTS">BTS</option>
                    <option <?php if (isset($artiest) && $artiest=="°C-ute") echo "selected";?> value="°C-ute">°C-ute</option>
                    <option <?php if (isset($artiest) && $artiest=="EXID") echo "selected";?> value="EXID">EXID</option>
                    <option <?php if (isset($artiest) && $artiest=="MAMAMOO") echo "selected";?> value="MAMAMOO">MAMAMOO</option>
                    <option <?php if (isset($artiest) && $artiest=="SISTAR") echo "selected";?> value="SISTAR">SISTAR</option>
                </select><br>               
                <label>Minimale prijs:</label><br>
                <input class="form-control" type="text" name="minimumprijs" autocomplete="off" value="<?=$minimum?>"><br>
                <label>Maximale prijs:</label><br>
                <input class="form-control" type="text" name="maximumprijs" autocomplete="off" value="<?=$maximum?>"><br>
                <input type="submit" name="knop" value="Selecteren" class="btn btn-default">
            </form>
            
            <div class="row">
            <?php 
                $count= -1;
                foreach($cds->getAlbums() as $album){
                    if($minimum == ""){
                        $minimum = 1;
                    }
                    if($maximum == ""){
                        $maximum = 999;
                    }
                    if($artiest != ""){
                        if (!($album->getArtiestnaam() == $artiest)) { 
                            continue;
                        }
                        if(!($album->getPrijs() >= $minimum)) {
                             continue;
                        }
                        if(!($album->getPrijs() <= $maximum)){
                             continue;
                        }
                    }
                    else{
                        if(!($album->getPrijs() >= $minimum)) {
                             continue;
                        }
                        if(!($album->getPrijs() <= $maximum)){
                             continue;
                        }
                    }
                    
                    $count+=1;
                    if($count%4==0){ ?>
                         </div>
                         <div class="row">
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="price">€<?=$album->getPrijs();?></div> 
                                        <img src="<?=$album->getCover();?>"  class="img-responsive">
                                        <h4 class="center"><?=$album->getArtiestnaam();?> - <?=$album->getTitel();?></h4>
                                        <audio controls><source src="<?=$album->getSong();?>" type="audio/mpeg"></audio>
                                    </div>
                                </div>
                            </div>
              <?php }
                    else{?>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="price">€<?=$album->getPrijs();?></div> 
                                    <img src="<?=$album->getCover();?>"  class="img-responsive">
                                    <h4 class="center"><?=$album->getArtiestnaam();?> - <?=$album->getTitel();?></h4>
                                    <audio controls><source src="<?=$album->getSong();?>" type="audio/mpeg"></audio>
                                </div>
                            </div>
                        </div>
              <?php }
                    
                }
               
                
            ?>
            </div>
        
        
       
     
        
    </div>
</body>
</html>