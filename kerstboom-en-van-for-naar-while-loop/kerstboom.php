<html>
<head>
  <title>Kerstboom</title>
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