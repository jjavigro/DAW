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
        $a=$_GET['a'];
        $b=$_GET['b'];
        
        echo "La mulplicacion de $a y $b es ".round($a*$b, 2);
        echo "<br>";
        echo "<a href='Index.html'><input type='button' value='Atras'></a>";
    ?>
</body>
</html>