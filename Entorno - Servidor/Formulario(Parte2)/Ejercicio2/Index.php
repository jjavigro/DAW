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
    
        $Temperatura=$_GET['T'];
        
        if (!isset($Temperatura)) {
        $meses=["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre","Octubre", "Noviembre", "Diciembre" ];
        echo "<form action='Index.php' method='GET'>";
        foreach ($meses as $Clave=>$Valor) {
            echo "<label>$Valor: <input type='text'/></label><br>";
            foreach ($Temperatura as $value) {
                $Clave=$value;
            }
        }
        echo"<input type='submit' value='Enviar'/>";
        echo "</form>";
        }else{
            //tabla
            print_r($meses);
        }
    ?>

</body>
</html>