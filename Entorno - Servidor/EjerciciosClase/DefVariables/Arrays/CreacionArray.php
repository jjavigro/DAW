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
        $alturasPrimero=[164, 178, 169, 182];
        $alturasSegundo=[
            0=>164,
            1=>178,
            2=>169,
            3=>182
        ];
        echo"Alturas Segundo: Posicion 0 ($alturasSegundo[0]) y posicion 2 ($alturasSegundo[2]).";
        
        $alturasSegundo_2=[
            2=>178
        ];
        $alturasSegundo=array_replace($alturasSegundo, $alturasSegundo_2);
        echo"<br>Altura modificada de la posicion 2 ($alturasSegundo[2])";
        
        array_push($alturasSegundo, 189);
        echo"<br>Altura modificada de la ultima posicion (".end($alturasSegundo).")";
        
        echo "<br>";
        print_r($alturasSegundo);
    ?>
</body>
</html>