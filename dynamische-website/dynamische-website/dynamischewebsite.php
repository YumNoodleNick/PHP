<?php
$loginmessage = "";
$adresmessage = "";
$emailmessage = "";
$wachtwoordmessage = "";

if($_POST["knop"]){

    $inlog = $_POST["inlognaam"];
    $adres = $_POST["adres"];
    $email = $_POST["email"];
    $wachtwoord = $_POST["wachtwoord"];

    if($inlog == ""){
        $loginmessage = "U heeft geen inlognaam ingevuld";
    }
    
    if($adres == ""){
        $adresmessage = "U heeft geen adres ingevuld";
    }
    
    if($email == ""){
        $emailmessage = "U heeft geen email ingevuld";
    }    
    
    if($wachtwoord == ""){
        $wachtwoordmessage = "U heeft geen wachtwoord ingevuld";
    }

}
?>
<html>
<head>
  <title>Dynamische website</title>
  <? include 'navbar.php'; ?>
  <style>
      
      .red{
          color:red;
      }
  </style>
</head>
<body>
    <div class = "container">
        <header>
            <h3> Registreren </h3>
        </header>
        
        <?php
        
        if($inlog == "" || $adres == "" || $email == "" || $wachtwoord == ""){?>        
    
        <form action="/dynamischewebsite" method="POST">
        <div class = "row">
            <div class = "col-md-1">Inlognaam</div>
            <div class = "col-md-2"><input type="text" name="inlognaam" value=""></div>
            <div class = "col-md-5 red"><?=$loginmessage?></div>
        </div>
        <div class = "row">
            <div class = "col-md-1">Adres</div>
            <div class = "col-md-2"><input type="text" name="adres" value=""></div>
            <div class = "col-md-5 red"><?=$adresmessage?></div>
        </div>
        <div class = "row">
            <div class = "col-md-1">Email</div>
            <div class = "col-md-2"><input type="text" name="email" value=""></div>
            <div class = "col-md-5 red"><?=$emailmessage?></div>
        </div>
        <div class = "row">
            <div class = "col-md-1">Wachtwoord</div>
            <div class = "col-md-2"><input type="password" name="wachtwoord" value=""></div>
            <div class = "col-md-5 red"><?=$wachtwoordmessage?></div>
        </div><br><br>            
                        <input type="submit" name="knop" value="Registreren">
        </form>
        <?php
        }else{
            require "ingevuld.php";
        }
        ?>
    </div>
</body>
</html>