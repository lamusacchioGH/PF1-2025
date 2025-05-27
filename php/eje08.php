<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo $_GET["param1"];
    echo "<br>";
    echo $_GET["param2"]; 
    echo "<br>";
        function esmayor($param1,$param2){
            if  ($param1 > $param2){
                echo "El primer número es mayor";
            }else if ($param2 > $param1){
                echo "El segundo número es mayor";
            }else {
                echo "Los numeros son iguales";
            }
        }
    esmayor($_GET["param1"],$_GET["param2"]);    
    ?>
    
</body>
</html>