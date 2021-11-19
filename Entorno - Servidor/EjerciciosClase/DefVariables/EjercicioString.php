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
        $a="a-a-r-e-f-a";
        $longitud=strlen($a);
        $mitadSuperior=substr($a, ($longitud/2), $longitud);
        $A=str_replace("a", "tortuga", $a);
        $AInvertido=strrev($A);
        $B=str_replace("e", "conejo", $A);
        $C=str_replace("r", "cabra", $B);
        $D=str_replace("f", "vaca", $C);
        echo "Varible: ".$a;
        echo "<br> Logitud de la cadena: ".$longitud;
        echo "<br> Mitad superior de la cadena: ".$mitadSuperior;
        echo "<br> Sustituir a por tortuga: ".$A;
        echo "<br> Cadena invertida: ".$AInvertido;
        echo "<br> Cadena desinvertida: ".strrev($AInvertido);
        echo "<br> Sustituir e por conejo: ".$B;
        echo "<br> Sustituir r por cabra: ".$C;
        echo "<br> Sustituir f por vaca: ".$D;
    ?>
</body>
</html>