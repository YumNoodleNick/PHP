<?php
    function temperatuurconverter($celcius){
        $fahrenheit = $celcius * 9 / 5 + 32;
        return $fahrenheit;
    }
    
    function deelbaardoor3($getal){
        if($getal % 3 == 0){
            return true;
        }
        else{
            return false;
        }
    }
    
    function omdraaien($string) {
        $omgedraait = "";
        $length = strlen($string);
        for($i = 0; $i < $length; $i++)
        {
            $omgedraait .= $string[$length - $i - 1];
        }
        return $omgedraait;
    } 
      
   ?>

<html>
<head>
  <title>Functies</title>
  <? include 'navbar.php'; ?>
  
</head>
<body>
    <div class = "container">
        <h3> Functies </h3>
        <br>
        <br>
        <h4> Celcius -> Fahrenheit: </h4>
        <br>
        <div class = "row">
            <div class = "col-md-4">
                <?= "0 °C = ".temperatuurconverter(0)." °F"?>  
            </div>
            <div class = "col-md-4">
                <?= "5 °C = ".temperatuurconverter(5)." °F"?>  
            </div>
            <div class = "col-md-4">
                <?= "14 °C = ".temperatuurconverter(14)." °F"?>  
            </div>
        </div>
        <br>
        <br>
        <h4> Het getal is deelbaar door 3 als resultaat is "1" (True) anders is het " " (False): </h4>
        <br>
        <div class = "row">
            <div class = "col-md-4">
                <?= "Het getal 9 is deelbaar door 3, dit is:".deelbaardoor3(9)?>  
            </div>
            <div class = "col-md-4">
                <?= "Het getal 16 is deelbaar door 3, dit is:".deelbaardoor3(16)?>  
            </div>
            <div class = "col-md-4">
                <?= "Het getal 21 is deelbaar door 3, dit is:".deelbaardoor3(21)?>  
            </div>
         </div>
         <br>
         <br>
         <h4> Woorden omdraaien: </h4>
         <br>
         <div class = "row">
             <div class = "col-md-4">
                 <?= "Nick omgedraait is: ".omdraaien("Nick")?>  
             </div>
             <div class = "col-md-4">
                 <?= "Mensink omgedraait is: ".omdraaien("Mensink")?>  
             </div>
             <div class = "col-md-4">
                 <?= "Vogelverschrikker omgedraait is: ".omdraaien("Vogelverschrikker")?>  
             </div>
         </div>  
            
                  
    
    
    

    </div>
</body>
</html>

