<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<table border="1px" width="200px" height="200px">
        <?php
            for ($i = 0; $i < 8; $i++) {
                echo"<tr>";
                for ($j = 0; $j < 8; $j++) {
                    
                    if(($i+$j)%2==0){
                        echo "<td style='background-color:black'> </td>";
                    }else{
                        echo "<td style='background-color:white'> </td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>