<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Empleado{
        public $nombre;
        public $sueldo;
        
        function __construct($nombre,$sueldo){
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }
        
        function pagaImpuesto(){

            if ($this->sueldo>3000){
                echo "Paga impuestos";
            }else
            echo "No paga impuestos";
        }
        
    }
    $empleado1 = new Empleado("Raul",5000);
    $empleado2 = new Empleado("Jorge",2000);
    echo $empleado1 ->nombre;
    echo"<br>";
    echo $empleado1 -> pagaImpuesto();
    echo"<br>";
    echo $empleado2 ->nombre;
    echo"<br>";
    echo $empleado2 -> pagaImpuesto();
    ?>
</body>
</html>