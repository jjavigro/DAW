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
        $Personas=[
            "Nombre"=>$nombre=["Juan", "Manolo", "Paco", "Sofia", "Maria"],
            "Apellidos"=>$apellidos=["Garcia Rodriguez", "Galvan Garcia", "Sanchez Fernandez", "Martinez Antunez", "Gonzalez Fuentes"],
            "Ciudad"=>$ciudad=["Sevilla", "Malaga", "Teruel", "Cordoba", "Tenerife"]
        ];
        
        echo $Personas["Apellidos"][1];
        echo "<br>".$Personas["Ciudad"][2];
        echo "<br>".$Personas["Ciudad"][0];
        
        print_r($Personas);
        
        foreach ($Personas as $valor=>$clave) {
            echo "<br>".$valor.": <br>";
            foreach ($clave as $valor2) {
                echo "<br>".$valor2;
            }
        }
    ?>
</body>
</html>