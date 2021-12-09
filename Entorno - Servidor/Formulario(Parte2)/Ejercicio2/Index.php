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
        if (!isset($_GET['temperatura'])) {
        $meses=["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre","Octubre", "Noviembre", "Diciembre" ];
        echo "<form action='Index.php' method='GET'>";
        foreach ($meses as $Valor) {
            echo "<label>$Valor: <input type='number' name='temperatura[$Valor]'/></label><br>";
        }
        echo"<input type='submit' value='Enviar'/>";
        echo "</form>";
        }else{
            $temperatura= $_GET['temperatura'];
            echo "<table border=1px>";
            foreach ($temperatura as $meses=>$TMes) {
                echo "<tr>";
                echo "<td>$meses</td>";
                echo "<td>";
                for ($i = 0; $i < $TMes; $i++) {
                    echo "<img src='imagen.png'>";
                }
                //Tabla con SVG
                //echo "<svg version ='1.1' xmlns= 'http://www.w3.org/2000/svg'";
                //echo "width='".$TMes."px' height='10px'>";
                //echo "<line x1='1' y1='5' x2='$TMes' y2='5' stroke='black' stroke-width='10'/>";
                //echo "</svg>";
                echo "$TMes C";
                echo "</td>";
                echo "</tr>";
            }
        }
    ?>

</body>
</html>