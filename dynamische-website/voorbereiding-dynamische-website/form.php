<html>
<head>
  <title>Voorbereiding dynamische website</title>
  <? include 'navbar.php'; ?>
</head>
<body>
    <div class = "container">
        <header>
            <h3> Voorbereiding dynamische website </h3>
        </header>
    
        <form action="/resultaat" method="GET">
            Inlognaam <input type="text" name="inlognaam" value=""><br>
            Wachtwoord <input type="password" name="wachtwoord" value=""><br>
                        <input type="submit" name="knop" value="verstuur">
        </form>
    </div>
</body>
</html>
     