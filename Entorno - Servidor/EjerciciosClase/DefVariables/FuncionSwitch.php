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
    $i=8;
        switch ($i) {
            case 0:
            echo "El valor es 0";
                break;
            
            case 3:
                echo "El valor es 3";
                break;
            case 8:
                echo "El valor es 8";
                break;
            
            default:
                echo "Dicho valor no esni 0, ni 3, ni 8";
            break;
        }
        
        echo "<br>";
        
        if($i==0){
            echo "Confirmacion de que el valor es 0";
        }else if($i==3){
            echo "Confirmacion de que el valor es 3";
        }else if($i==8){
            echo "Confirmacion de que el valor es 8";
        }else{
            echo "Dicho valor no esni 0, ni 3, ni 8";
        }
    ?>
</body>
</html>