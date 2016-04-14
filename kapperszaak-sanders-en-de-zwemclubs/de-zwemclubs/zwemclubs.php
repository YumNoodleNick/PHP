<?php 
   $zwemmer["De spartelkuikens"]=25;
   $zwemmer["De waterbuffels"]=32;
   $zwemmer["Plonsmderin"]=11;
   $zwemmer["Bommetje"]=23;
   
   $afbeelding = '<img src = "/zwem" style = "width: 50px; height: 50px;">';

    ?>
    
<html>
<head>
  <title>Zwemclubs</title>
  <? include 'navbar.php'; ?>
  <style>
      td{
          padding: 10px;
          padding-right: 50px;
      }
      th{
          padding: 10px;
      }
      
  </style>
</head>

<body>
    <h3> Zwemclubs </h3>
    
    <table class = "table-bordered">
       <thead>
         
              <th>Zwemclubs</th>
              <th>Aantal leden</th>
              <th></th>
       </thead>
       <tbody>
         <?php foreach ($zwemmer as $label => $waarde) { ?>
                    <tr>
                        <td><?= $label ?> </td>
                        <td><?= $waarde ?> </td>
                        <td>
                        <?php 
                        for ($x = 5; $x <= $waarde; $x+=5) {
                            echo $afbeelding;
                        } 
                         ?>
                         </td>
                    </tr>
          <?php } ?>           
       </tbody>         
    </table>
    
    
    
</body>
</html>


