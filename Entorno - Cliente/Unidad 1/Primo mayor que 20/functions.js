function MostrarPrimo(){
    var valor = document.getElementById("numero").value;
    var contador=valor;
    if(valor<20){
        alert("Numero no valido");
    }else{
        do{
            contador++;
        } while (contador%2==0)
        alert(contador);
    }
}