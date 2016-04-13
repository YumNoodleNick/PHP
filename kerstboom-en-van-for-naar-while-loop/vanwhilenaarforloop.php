<html>
<head>
  <title>Van while naar for loop</title>
  <? include 'navbar.php'; ?>
</head>

<body>
    <h3> Van while naar for loop </h3>
</body>
</html>
<?php 
    $x = 35;
    while($x >= 25) {
        echo "While-loop ";
        $x--;
    }
    ?>
    <br><br>
    <?php    
    for($x = 35; $x >= 25; $x--){
        echo "For-loop ";
    }
    ?>