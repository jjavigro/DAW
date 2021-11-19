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
        $i="Las noticias de hoy";
        $n=1;
        while ($n<=4) {
            
            echo"<h$n>$i</h$n>";
            $n++;
        }
    ?>
</body>
</html>