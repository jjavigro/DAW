<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<?php
	$n = $_GET['n'];
	$contadorNumeros = $_GET['contadorNumeros'];
	$numeroTexto = $_GET['numeroTexto'];
	
	if (!isset($n)) {
	    $contadorNumeros = 0;
	    $numeroTexto = "";
	}
	
	////////////////////////////////////////////////////////////////
	// Programa principal una vez recogidos los datos del array.
	// El array con los números es $numero
	////////////////////////////////////////////////////////////////
	
	if ($contadorNumeros == 10) {
	    $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
	    $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes del inicio vacio
	    $numero = explode(" ", $numeroTexto); //Devuelve un array de String eliminando "
	    $maximo = -PHP_INT_MAX;
	    $minimo = PHP_INT_MAX;
	    //Recorremos el array para buscar el maximo y minimo
	    foreach ($numero as $n) {
	        if ($n < $minimo) {
	            $minimo = $n;
	        }
	        if ($n > $maximo) {
	            $maximo = $n;
	        }
	    }
	    //Bucle para mostrar los numeros con su correspondiente maximo y minimo
	    foreach ($numero as $n) {
	        if ($n == $minimo) {
	            echo "$n minimo<br>";
	        } else if ($n == $maximo) {
	            echo "$n maximo<br>";
	        } else {
	            echo "$n<br>";
	        }
	    }
	}
	////////////////////////////////////////////////////////////////
	
	
	// Pide número y añade el actual a la cadena
	if (($contadorNumeros < 10) || (!isset($n))) {
	    ?>
        <form action="Index.php" method="get">
        <input type="hidden" name="ejercicio" value="02">
        Introduzca un número:
        <input type="number" name ="n" autofocus>
        <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
        <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
        <input type="submit" value="OK">
        </form>
    <?php
    }
    ?>
</body>
</html>