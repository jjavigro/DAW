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
        $SalarioDia=($a*12);
        echo "Salario x dia: $SalarioDia euros.";
        echo "<br>";
        echo "Salario x semana: ".($SalarioDia*7)." euros.";
        echo "<br>";
        echo "<a href='Index.php'><input type='button' value='Atras'></a>";
    ?>
</body>