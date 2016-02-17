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