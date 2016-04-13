<html>
<head>
  <title>Busreis</title>
  <? include 'navbar.php'; ?>
</head>
<body>
    <h3> Busreis </h3>
</body>
</html>

<?php
       $leeftijd = 9;
       $prijs = 10;
       
       if ($leeftijd > 65) {
           echo "U betaald voor deze rit €" . $prijs * 0.50;
       } else if ($leeftijd < 3) {
           echo "U betaald voor deze rit €" . $prijs * 0;      
       } else if ($leeftijd <= 12) {
           echo "U betaald voor deze rit €" . $prijs * 0.50;
       } else {
           echo "U betaald voor deze rit €" . $prijs;
       }
       ?>