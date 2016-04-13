<?php
  include "functies.php";
  
  $muziek = getMuziek(); 
?>

<?php include  "header.php";?>


    <table class="table-bordered">
        <tr>
            <th>Artiest</th>
            <th>Laatste album</th>
        </tr>
        <tbody>
        <?php 
        foreach($muziek as $index => $m) {
            ?>
            <tr>
                <td> <?= $m['Artiestnaam'] ?> </td>
                <td> <?= $m['Album'] ?> </td>
            </tr> 
            <?php
        }
        ?>
        </tbody>
     </table>


<?php include "footer.php";?>

