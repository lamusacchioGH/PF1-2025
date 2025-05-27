<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cad1 = "Comer verduras ";
        $cad2 = "es realmente sano";
        $cad3 = $cad1.$cad2;
        echo $cad3;
        echo '<br>';
        echo STRPOS($cad3,'verduras');
 ?>
</body>
</html>