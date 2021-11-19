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
        $a=" Frase con espacios ";
        $b=ltrim($a);//Elimina esapcios delanteros, (rtrim, elimina espacios traseros)
        echo "Con espacios: --".$a."-- y tiene como longitud ".strlen($a)." caracteres";
        echo "<br>";
        echo "Sin espacios: --".$b."-- y tiene como longitud ".strlen($b)." caracteres";
    ?>
</body>
</html>