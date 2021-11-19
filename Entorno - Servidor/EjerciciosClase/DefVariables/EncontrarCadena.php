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
        $a="Hola buenos dias";
        $b="buenos";
        $pos= strpos($a, $b);
        
        echo "Primera cadena: $a";
        echo "<br>";
        echo "Segunda cadena: $b";
        echo "<br>";
        if($pos==true){
            echo "La primera cadena se encuentra dentro de la segunda cadena en la posicion $pos";
        }else{
            echo "La primera cadena no se encuentra dentro de la segunda cadena";
        }
    ?>
</body>
</html>