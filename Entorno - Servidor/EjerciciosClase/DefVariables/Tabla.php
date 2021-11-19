<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<table border="1px">
        <?php
            $Filas=5;
            $Columnas=3;
            
            for ($i = 0; $i < $Columnas; $i++) {
                echo"<tr>";
                for ($j = 0; $j < $Filas; $j++) {
                    echo"<td>$j</td>";
                }
                echo"</tr>";
            }
        ?>
    </table>
</body>
</html>