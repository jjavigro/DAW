<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<table border=1px;>
		<tr>
			<td>Nro</td>
			<td>Factorial</td>
			<td>Imprime</td>
		</tr>
        <?php
            $i=1;
            while($i<10){
                $n=$i;
                $factorial=1;
                
                echo "<tr>";
                echo "<td>".$i."</td>";
            
                while ($n>=1) {
                    $factorial=$factorial*$n;
                    //echo "<td>".$n."</td>";
                    $n--;
                }
                
                echo "<td>".$factorial."</td>";
                echo "<td>".$i." - ".$factorial."</td>";
                $i++;
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>