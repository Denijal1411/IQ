<?php
    session_start();
      
        if(isset($_SESSION['ime'])==true)
            session_destroy();
            if(isset($_GET['btn1'])){
                $ime1=$_GET["ime"];
            $_SESSION['ime']=$ime1;
            $_SESSION['status']="ulogovan";
            if(strlen($ime1)>=3) header('Location:strana1.php'); 
            }
        //print_r($_SESSION);
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/css.css">
        <script src="../js/jquery-3.3.1.js"></script>
        <title>Početna</title>
        <link rel="icon" type="image/ico" href="../slike/logo.jpg" /> 
    </head>
    <body> 
            <!-- Prva strana-->
        <div class='okvir'>
            <?php
                if(isset($_SESSION['ime'])==false ) { 
                        echo "<div id='prva_strana_prijava'>
                        <form action='' method='GET'>
                            Ime:* <br> <input title='Ime'type='text' name='ime' id='ime' onkeyup='proveri_ime();return false;'>
                            <br>
                            <span id='greska'></span> <br>  
                            <input type='submit' value='Započni rešavanje testa' id='btn1'name='btn1'> <br>
                            <p style='position:absolute;bottom:0px;right:0px;'>Pre nego što započnete rešavati test, <br>upoznajte se sa <a href='pravila.pdf'>pravilima</a>.</p>
                        </form>
                    </div>" ; 
                    }
                    else if(isset($_SESSION['broj_bodova'])==false ){
                        echo "<p id='ptag'style='color:white' >Postovani,<b>".$_SESSION['ime']."</b><br>Koristili ste nedozvoljena sredstva tokom resavanja testa.";
                    }  
                    if(isset($_SESSION['broj_bodova'])==true && isset($_SESSION['ukupno_odgovorenih'])==true ) 
                        { 
                            $s=$_SESSION['ukupno_odgovorenih'];
                            $r=$_SESSION['broj_bodova'];
                            $t=0;
                            if($s==1) $t=floatval($r*0.25);
                            else if($s==2) $t=floatval($r*0.19);
                            else if($s==3 || $s==4) $t=floatval($r*0.20);
                            else if($s==3) $t=floatval($r*0.20);
                            else if($s==4) $t=floatval($r*0.35);
                            else if($s==5) $t=floatval($r*0.32);
                            else if($s==6) $t=floatval($r*0.30);
                            else if($s==7 || $s==8) $t=floatval($r*0.26);
                            else if($s==3 || $s==4) $t=floatval($r*0.20);
                            else if($s==9 || $s==10) $t=floatval($r*0.25);
                            $ime=$_SESSION['ime'];
                            echo "        
                            <span style='font-size:20px;color:red;position:relative;left:10%;top:25%;'>
                                     <b>Poštovani $ime,<br> odgovorili ste tacno na <strong>$s/10</strong> pitanja <br>
                                     to je ukupno $t bodova</span></b>"; 
                    }
                 
            ?>
        </div>  
        <footer>
                &copy;DB
        </footer>
            <!--Kraj Prve strane --> 
        <script src="../js/js.js"></script>
    </body>
</html>