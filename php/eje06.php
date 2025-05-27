<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=0;
    $b=0;
    echo '<table border = 1>';
        for($i=0;$i<=10;$i++){
            echo '<tr>';
            if($i == 0){
                echo $a;
                $a=$a+1;
            }
            for($n=0;$n<=10;$n++){
                echo '<td>';
                    echo $i*$n;
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        
    ?>
</body>
</html>