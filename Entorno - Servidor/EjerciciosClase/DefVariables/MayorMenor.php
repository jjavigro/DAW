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
        $a=3;
        $b=2;
        
        if($a==$b){
            echo "El numero $a es igual a $b";
        }else if($a<$b){
            echo "El numero $a es menor que $b";
        }else{
            echo "El numero $a es mayor que $b";
        }
    ?>
</body>
</html>