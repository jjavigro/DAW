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
        $pais=[
            "Andalucia"=>$andalucia=["Sevilla", "Cadiz", "Malaga", "Cordoba", "Granada", "Jaen", "Almeria", "Huelva"],
            "Comunidad Valenciana"=>$ComunidadValenciana=["Castellon", "Valencia", "Alicante"],
            "Castilla la Mancha"=>$CastillaLaMancha=["Guadalajara", "Toledo", "Cuenca", "Ciudad Real", "Albacete"]
        ];
        
        print_r($pais);
        
        foreach ($pais as $nombre=>$comunidad) {
            foreach ($comunidad as $provincia) {
                if ($nombre=="Andalucia") {
                    echo $provincia." ";
                }
                echo "<br>";
                if ($nombre=="Comunidad Valenciana") {
                    echo $provincia." ";
                }
                echo "<br>";
                if ($nombre=="Castilla la Mancha") {
                    echo $provincia." ";
                }
            }
        }
    ?>
</body>
</html>