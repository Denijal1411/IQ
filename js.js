var a1=0,a2=0;
 
function proveri_ime(){
    var ime=$("#ime").val();
    var br=0;
    for(var i=0;i<ime.length;i++)
    {
        if((ime[i]>='a' && ime[i]<='z')||(ime[i]>='A' && ime[i]<='Z')){
            br++;
        }
    }
    if(br!=ime.length || ime.length<3)
    {
        $("#greska").text("Greska! Ime sadrzi nedozvoljene znake ili je prekratko.");
        $("#greska").css("color","white");
        document.getElementById("btn1").disabled = true;   
    }
    else{
         
        $("#greska").text("");
        $("#greska").css("color","white"); 
        document.getElementById("btn1").disabled = false;  
    }
};  
$(document).ready(function(){
    
}); 


 