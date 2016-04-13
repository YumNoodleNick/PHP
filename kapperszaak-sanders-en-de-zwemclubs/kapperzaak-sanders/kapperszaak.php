<?php 
   $kappersagenda["9:15"]="Mevr. Pietsersen";
   $kappersagenda["9:30"]="Mevr. Willems";
   $kappersagenda["9:45"]="";
   $kappersagenda["10:00"]="Paul van den Broek";
   $kappersagenda["10:15"]="Karel de Meeuw";
   $kappersagenda["10:30"]="";   
   ?>

<html>
<head>
  <title>Kapperszaak Sanders</title>
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
    <h3> Kapperszaak Sanders </h3>
    
    <table class = "table-bordered">
       <thead>
         
              <th>Tijd</th>
              <th>Afspraak</th>
       </thead>
       <tbody>
         <?php foreach ($kappersagenda as $tijd => $afspraak) { ?>
                    <tr>
                        <td><?= $tijd ?> </td>
                        <td><?= $afspraak ?> </td>                        
                    </tr>
          <?php } ?>           
       </tbody>         
    </table>
    <br><br>
    
    <?php
     print("De volgende momenten zijn nog beschikbaar:<ul>");
        foreach($kappersagenda as $tijd => $afspraak) {
            if($afspraak == "") { 
                print("<li>".$tijd."</li>") ;
            }
        }
     print("</ul>");

       ?>

    
</body>
</html>

