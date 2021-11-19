let operacion="";

function Enviar(valor){
   operacion=operacion+valor;
}

function Resolver(){
    var solucion= eval(operacion);
    document.getElementById("Resultado").innerHTML=operacion+" = "+parseFloat(solucion.toFixed(2));
    operacion="";
    solucion="";
}

function Limpiar(){
    operacion="";
    document.getElementById("Resultado").innerHTML=operacion;
}