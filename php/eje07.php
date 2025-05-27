<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function volumen($radio, $altura){
        $vol = 3.14 * $radio * $radio * $altura;
        return $vol;
    }
    echo volumen(1.5,3);
    ?>
</body>
</html>
