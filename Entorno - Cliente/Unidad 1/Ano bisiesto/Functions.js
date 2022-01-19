
var ano=prompt("Introducir ano: "); 

function ComprobacionAnoBisiesto(){

    if((ano%4==0) && ((ano%100 != 0) || (ano%400 == 0)))
        alert("El ano es bisiesto");
    else
        alert("El ano no es bisiesto");    
    }

    ComprobacionAnoBisiesto();
