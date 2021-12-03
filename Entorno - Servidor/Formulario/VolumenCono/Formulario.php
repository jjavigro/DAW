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
        echo "El volumen del cono es ".round(1/3*pi()*($a*$a)*$b, 2)."cm <sup>3</sup>";
        echo "<br>";
        echo "<a href='Index.php'><input type='button' value='Atras'></a>";
    ?>
</body>