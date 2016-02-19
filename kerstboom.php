<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <? include 'navbar.php'; ?>
</head>
<body>
    <h3> Kerstboom </h3>
</body>
</html>

<?php

$lagen = 10;
 
for($laag = 0; $laag < $lagen; $laag++) {
	for($spatie = 10; $ster < $spatie; $spatie--){
       echo "&nbsp;";
    }
    for($ster = 0; $ster < $laag; $ster++) {      
       
       echo " *";
    } 
    echo "<br>";     
}

?>