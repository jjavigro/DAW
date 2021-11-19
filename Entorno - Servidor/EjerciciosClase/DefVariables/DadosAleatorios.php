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
        $NumeroDados=10;
        echo "Los resultados son: ";
        $Impar=0;
        $Par=0;
        for ($i = 0; $i < $NumeroDados; $i++) {
            $Dado=rand(1,6);
            echo $Dado." ";
            if (($Dado%2)==0) {
                $Par++;
            }else{
                $Impar++;
            }
        }
        
        echo"<br>Hay $Par numeros pares y $Impar impares";
        
        ?>
</body>
</html>