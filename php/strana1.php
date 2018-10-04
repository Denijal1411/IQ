<?php
    session_start();  
    if(isset($_SESSION['ukupno_odgovorenih']))
        {
            unset($_SESSION['ukupno_odgovorenih']);
            unset($_SESSION['broj_bodova']);
        }
    if(isset($_SESSION['status'])==false)
        header("Location:pocetna.php");
    //print_r($_SESSION);// U pocetku je izlogovan, sve do kse ne uloguje.*/ 

?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/css.css">
        <script src="../js/jquery-3.3.1.js"></script> 
        <title>IQ</title>
        <link rel="icon" type="image/ico" href="../slike/logo.jpg" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>  
        <span id="vreme"></span>
        <span id="poruka_o_korisniku">
            <?php
                echo "Test rešava:<br><b>".$_SESSION['ime']."</b>";
            ?>
        </span> 
        <div>
            <form action="" method="GET">
                <!-- Prvo pitanje-->
                <div class='okvir'>
                    <span style="font-size:40px;margin:0 auto;">1.</span>
                    <div class="pitanja">
                        <img src="../slike/test1.jpg" alt="Slika.jpg"> <hr> 
                        <span class="odgovor">Izaberite odgovor:
                            <select name="odgovori1" id="odgovori1">
                                <option value="no1">---</option>
                                <option value="o11">1.</option>
                                <option value="o21">2.</option>
                                <option value="o31">3.</option>
                                <option value="o41">4.</option>
                            </select>
                        </span>                       
                    </div>
                </div>
                <!--KRAJ PRVOG PITANJA-->
                <!-- Drugo pitanje-->
                <div class='okvir'>
                    <span style="font-size:40px;margin:0 auto;">2.</span>
                    <div class="pitanja">
                        <img src="../slike/test2.jpg" alt="Slika.jpg"> <hr> <br>
                            <span class="odgovor">Izaberite odgovor:
                                <select name="odgovori2" id="odgovori2">
                                    <option value="no2">---</option>
                                    <option value="o12">1.</option>
                                    <option value="o22">2.</option>
                                    <option value="o32">3.</option>
                                    <option value="o42">4.</option>
                                </select>
                            </span> <br>                      
                    </div>
                </div>
                <!--KRAJ DRUGOG PITANJA-->
                <!-- Trece pitanje-->
                <div class='okvir'>
                    <span style="font-size:40px;margin:0 auto;">3.</span>
                    <div class="pitanja">
                        <img src="../slike/test3.jpg" alt="Slika.jpg"> <hr> <br> <br>
                        <span class="odgovor">Izaberite odgovor:
                            <select name="odgovori3" id="odgovori3">
                                <option value="no3">---</option>
                                <option value="o13">1.</option>
                                <option value="o23">2.</option>
                                <option value="o33">3.</option>
                                <option value="o43">4.</option>
                                <option value="o53">5.</option>
                                <option value="o63">6.</option>
                                <option value="o73">7.</option>
                                <option value="o83">8.</option>
                                <option value="o93">9.</option>
                            </select>
                        </span>                      
                    </div>
                </div>
                <!--KRAJ TRECEG PITANJA-->
                <!-- Cetvrto pitanje-->
                <div class='okvir'>
                    <span style="font-size:40px;margin:0 auto;">4.</span>
                    <div class="pitanja">
                        <img src="../slike/test4.jpg" alt="Slika.jpg"> <hr>   
                        <span class="odgovor">Izaberite odgovor:
                            <select name="odgovori4" id="odgovori4">
                                <option value="no4">---</option>
                                <option value="o14">1.</option>
                                <option value="o24">2.</option>
                                <option value="o34">3.</option>
                                <option value="o44">4.</option>
                                <option value="o54">5.</option>
                                <option value="o64">6.</option>
                                <option value="o74">7.</option>
                                <option value="o84">8.</option>
                                <option value="o94">9.</option>
                            </select>
                        </span>
                    </div>
                </div>
                <!--KRAJ CETVRTOG PITANJA-->
                <!-- Peto pitanje-->
                <div class='okvir'>
                    <span style="font-size:40px;margin:0 auto;">5.</span>
                    <div class="pitanja">
                        <img src="../slike/test5.jpg" alt="Slika.jpg"> <hr> 
                        <span class="odgovor">Izaberite odgovor:
                            <select name="odgovori5" id="odgovori5">
                                <option value="no5">---</option>
                                <option value="o15">1.</option>
                                <option value="o25">2.</option>
                                <option value="o35">3.</option>
                                <option value="o45">4.</option>
                                <option value="o55">5.</option>
                                <option value="o65">6.</option>
                                <option value="o75">7.</option>
                                <option value="o85">8.</option>
                                <option value="o95">9.</option>
                            </select>
                        </span>                      
                    </div>
                </div>
                <!--KRAJ PETOG PITANJA-->
                <!-- Sesto pitanje-->   
                <div class='okvir'>
                    <span style="font-size:40px;margin:0 auto;">6.</span>
                    <div class="pitanja">
                        <img src="../slike/test6.jpg" alt="Slika.jpg"> <hr> 
                        <span class="odgovor">Izaberite odgovor:
                            <select name="odgovori6" id="odgovori6">
                                <option value="no6">---</option>
                                <option value="o16">1.</option>
                                <option value="o26">2.</option>
                                <option value="o36">3.</option>
                                <option value="o46">4.</option>
                            </select>
                        </span>                       
                    </div>
                </div>
                <!--KRAJ Sestog PITANJA-->
                <!-- Sedmo pitanje-->
                <div class='okvir'>
                    <span style="font-size:40px;margin:0 auto;">7.</span>
                    <div class="pitanja">
                        <img src="../slike/test7.jpg" alt="Slika.jpg"> <hr> 
                        <span class="odgovor">Izaberite odgovor:
                            <select name="odgovori7" id="odgovori7">
                                <option value="no7">---</option>
                                <option value="o17">1.</option>
                                <option value="o27">2.</option>
                                <option value="o37">3.</option>
                                <option value="o47">4.</option>
                           </select>
                        </span>                      
                    </div>
                </div>
                <!--KRAJ Sedmog PITANJA-->
                <!-- Osmo pitanje-->
                <div class='okvir'>
                    <span style="font-size:40px;margin:0 auto;">8.</span>
                    <div class="pitanja">
                        <img src="../slike/test8.jpg" alt="Slika.jpg"> <hr>   
                        <span class="odgovor">Izaberite odgovor:
                            <select name="odgovori8" id="odgovori8">
                                <option value="no8">---</option>
                                <option value="o18">1.</option>
                                <option value="o28">2.</option>
                                <option value="o38">3.</option>
                                <option value="o48">4.</option>
                            </select>
                        </span>                      
                    </div>
                </div>
                <!--KRAJ OSMO PITANJA-->
                <!-- Deveto pitanje-->
                <div class='okvir'>
                    <span style="font-size:40px;margin:0 auto;">9.</span>
                    <div class="pitanja">
                        <img src="../slike/test9.jpg" alt="Slika.jpg"> <hr>   
                        <span class="odgovor">Izaberite odgovor:
                            <select name="odgovori9" id="odgovori9">
                                <option value="no9">---</option>
                                <option value="o19">1.</option>
                                <option value="o29">2.</option>
                                <option value="o39">3.</option>
                                <option value="o49">4.</option>
                                <option value="o59">5.</option>
                            </select>
                        </span>
                    </div>
                </div>
                <!--KRAJ DEVETOG PITANJA-->
                <!-- Deseto pitanje-->
                <div class='okvir'>
                    <span style="font-size:40px;margin:0 auto;">10.</span>
                    <div class="pitanja">
                        <img src="../slike/test10.jpg" alt="Slika.jpg"> <hr>
                        <span class="odgovor">Izaberite odgovor:
                            <select name="odgovori10" id="odgovori10">
                                <option value="no10">---</option>
                                <option value="o110">1.</option>
                                <option value="o210">2.</option>
                                <option value="o310">3.</option>
                                <option value="o410">4.</option>
                                <option value="o510">5.</option>
                                <option value="o610">6.</option>
                                <option value="o710">7.</option>
                                <option value="o810">8.</option>
                                <option value="o910">9.</option>
                            </select>
                        </span> <br> <br> <br>
                        <input type="submit" class="po" value="Send" style="bottom:-35px;left:35%;" name="btn" id="btn"> 
                    </div>
                </div>
            </form>
                <!--KRAJ DESETOG PITANJA-->
            <footer>
                    &copy;DB 
            </footer> 
            <!--Kraj Prve strane -->
            <?php
                $br=0;
                $suma=0;
                if(isset($_GET['btn']))
                { 
                     if($_GET['odgovori1']=='o41') 
                     {$br++;$suma+=20;}
                     if($_GET['odgovori2']=='o22') 
                     {$br++;$suma+=30;}
                     if($_GET['odgovori3']=='o63') 
                     {$br++;$suma+=40;}
                     if($_GET['odgovori4']=='o74') 
                     {$br++;$suma+=50;}
                     if($_GET['odgovori5']=='o15') 
                     {$br++;$suma+=60;}
                     if($_GET['odgovori6']=='o46') 
                     {$br++;$suma+=60;}
                     if($_GET['odgovori7']=='o37') 
                     {$br++;$suma+=60;}
                     if($_GET['odgovori8']=='o48') 
                     {$br++;$suma+=70;}
                     if($_GET['odgovori9']=='o59') 
                     {$br++;$suma+=90;}
                     if($_GET['odgovori10']=='o910') 
                     {$br++;$suma+=100;}
                     $_SESSION['ukupno_odgovorenih']=$br;
                     $_SESSION['broj_bodova']=$suma; 
                     header('Location:r.php');
                }
            ?> 
            <script>  
                $(document).ready(function(){ 
                    $("#vreme").css("background-color","orange");
                    $("#vreme").css("position","fixed");
                    $("#vreme").css("font-size","36px");
                    $("#vreme").css("border","2px solid black");
                    $("#vreme").css("padding","10px");
                    $("#vreme").css("width","150px");
                    var myVar = setInterval(myTimer, 750);
                    var min=parseInt(8);
                    var sek=parseInt(0);
                    function myTimer() {
                        sek=sek-1;
                        if(sek<0)
                            {
                                min=min-1;
                                sek=59;
                        }
                        document.getElementById("vreme").innerHTML =""+min+":"+sek;
                        if(sek==(0) && min==0)
                            {
                                alert("Vreme je isteklo");
                                clearInterval(myVar);
                            }
                        if(min==0 && sek<=30)
                            {
                                $("#vreme").css("background-color","red");
                        }
                    }
                    <?php
                        
                    ?>
                }); 
                $(window).blur(function(){ 
                   <?php unset($_SESSION['status']);
                        
                    ?>
                   window.open("pocetna.php","_self");  
                }); 
            </script>  
        </div>
    </body>
</html>