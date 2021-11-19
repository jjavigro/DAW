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
        $personas=[
            1=>"Paco",
            2=>"Maria",
            3=>"Pedro"
        ];
        //var_dump($personas);
        print_r($personas);
        echo"<br>-------------------------<br>";
        
        $nombreFemeninos=[
            1=>"Lucia",
            2=>"Juani",
            10=>"Rosa"
        ];
        print_r($nombreFemeninos);
        echo"<br>-------------------------<br>";
        
        $ArraySustituta=[
            10=>"Belen"
        ];
        $ArrayReplace=array_replace($nombreFemeninos, $ArraySustituta);
        print_r($ArrayReplace);
        echo"<br>-------------------------<br>";
        
        $caractPersona=[
            "Pelo"=>"Marron",
            "Ojos"=>"Azules",   
            "Altura"=>1.75,
            5=>10            
        ];
        print_r($caractPersona);
        echo"<br>-------------------------<br>";
    ?>
</body>
</html>