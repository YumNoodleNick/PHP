<?php
if($_POST["knop"]){

    $keuze = $_POST["aoa"];
    
}
?>
<html>
<head>
  <title>Beasties</title>
  <? include 'navbar.php'; ?>  
</head>
<body>
    <div class = "container">        
<?php if($_POST["knop"]){
    ?><header>
            <h3> U heeft gekozen voor: </h3>
            <br><a href="aoa.php">Andere kiezen</a><br><br> 
        </header>
         
        
            <?php
            
        foreach ($keuze as $resultaat) {
        
            if($resultaat == "choa"){
                ?>
                  <div class="col-md-3">
                            <img src="aoa-afbeeldingen/choa.jpg"  class="img-responsive">
                            <h4 >
                                <b>Birth Name:</b> Park Cho Ah<br>
                                <b>Stage Name:</b> Choa<br>
                                <b>Angel Name:</b> Choaya<br>
                                <b>Birthday:</b> March 6, 1990<br>
                                <b>Position:</b> Main Vocalist, Guitarist, Dancer<br>
                                <b>Height:</b> 160 cm (5'2")<br>
                                <b>Weight:</b> 42 kg (92 lbs)
                            </h4>
                        </div>  
           <?php }
           if($resultaat == "jimin"){
               ?>          
                  <div class="col-md-3">
                            <img src="aoa-afbeeldingen/jimin.jpg"  class="img-responsive">
                            <h4 >
                                <b>Birth Name:</b> Shin Ji Min<br>
                                <b>Stage Name:</b> Jimin<br>
                                <b>Angel Name:</b> Jiminel<br>
                                <b>Birthday:</b> January 8, 1991<br>
                                <b>Position:</b> Leader, Guitarist, Rapper, Dancer<br>
                                <b>Height:</b> 160 cm (5'2")<br>
                                <b>Weight:</b> 43 kg (94 lbs)                                
                            </h4>
                        </div>  
           <?php }
           if($resultaat == "yuna"){
               ?>
                  <div class="col-md-3">
                            <img src="aoa-afbeeldingen/yuna.jpg"  class="img-responsive">
                            <h4 >
                                <b>Birth Name:</b> Seo Yu Na<br>
                                <b>Stage Name:</b> Yuna<br>
                                <b>Angel Name:</b> Yunaria<br>
                                <b>Birthday:</b> December 30, 1992<br>
                                <b>Position:</b> Lead Vocalist, Keyboard, Dancer<br>
                                <b>Height:</b> 163 cm (5'3")<br>
                                <b>Weight:</b> 45 kg (99 lbs)
                            </h4>
                        </div>  
           <?php }
           if($resultaat == "hyejeong"){
               ?>
                  <div class="col-md-3">
                            <img src="aoa-afbeeldingen/hyejeong.jpg"  class="img-responsive">
                            <h4 >
                                <b>Birth Name:</b> Shin Hye Jeong<br>
                                <b>Stage Name:</b> Hyejeong<br>
                                <b>Angel Name:</b> Hyejeong.Linus<br>
                                <b>Birthday:</b> August 10, 1993<br>
                                <b>Position:</b> Vocalist, Face of the Group, Dancer<br>
                                <b>Height:</b> 170 cm (5'5")<br>
                                <b>Weight:</b> 48 kg (105 lbs)
                            </h4>
                        </div>  
           <?php }
           if($resultaat == "mina"){
               ?>
                  <div class="col-md-3">
                            <img src="aoa-afbeeldingen/mina.jpg"  class="img-responsive">
                            <h4 >
                                <b>Birth Name:</b> Kwon Min A<br>
                                <b>Stage Name:</b> Mina<br>
                                <b>Angel Name:</b> Minaring<br>
                                <b>Birthday:</b> September 21, 1993<br>
                                <b>Position:</b> Vocalist, Bassist, Dancer<br>
                                <b>Height:</b> 160 cm (5'2")<br>
                                <b>Weight:</b> 43 kg (94 lbs)
                            </h4>
                        </div>  
           <?php } 
           if($resultaat == "seolhyun"){
               ?>
                  <div class="col-md-3">
                            <img src="aoa-afbeeldingen/seolhyun.jpg"  class="img-responsive">
                            <h4 >
                                <b>Birth Name:</b> Kim Seol Hyun<br>
                                <b>Stage Name:</b> Seolhyun<br>
                                <b>Angel Name:</b> Seolhyunari<br>
                                <b>Birthday:</b> January 3, 1995<br>
                                <b>Position:</b> Lead Dancer<br>
                                <b>Height:</b> 167 cm (5'4")<br>
                                <b>Weight:</b> 47 kg (103 lbs)
                            </h4>
                        </div>  
           <?php }
           if($resultaat == "chanmi"){
               ?>
                  <div class="col-md-3">
                            <img src="aoa-afbeeldingen/chanmi.jpg"  class="img-responsive">
                            <h4 >
                                <b>Birth Name:</b> Park Chan Mi<br>
                                <b>Stage Name:</b> Chanmi<br>
                                <b>Angel Name:</b> Chanmi<br>
                                <b>Birthday:</b> June 19, 1996<br>
                                <b>Position:</b> Main Dancer, Rapper, Vocalist, Maknae<br>
                                <b>Height:</b> 166 cm (5'4")<br>
                                <b>Weight:</b> 47 kg (103 lbs)
                            </h4>
                        </div>  
           <?php }        
            } 
        }else{
        ?>        
        <header>
            <h3> AoA </h3>
        </header>
        
        <img src="aoa-afbeeldingen/aoa.jpg"  class="img-responsive"><br>                
        <form action="aoa.php" method="POST">
        
            <b>Kies een member:</b><br><br>
            <select id="aoa" class="form-control" name="aoa[]" multiple>
                <option value="choa">Choa</option>
                <option value="jimin">Jimin</option>
                <option value="yuna">Yuna</option>
                <option value="hyejeong">Hyejeong</option>
                <option value="mina">Mina</option>
                <option value="seolhyun">Seolhyun</option>
                <option value="chanmi">Chanmi</option>
            </select><br><br>            
            <input type="submit" name="knop" value="Selecteren">
        </form>
        <?php } 
        
        ?>
        
    </div>
</body>
</html>