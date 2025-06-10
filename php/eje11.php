<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Persona {
        private $nombre;
        private $edad;

        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre= $nombre;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function setEdad($edad){
            $this->edad = $edad;
        }
    }
    class Empleado extends Persona {
        private $sueldo;
    
        public function setSueldo($sueldo){
            $this->sueldo = $sueldo;
        }
        public function getSueldo(){
            return $this->sueldo;
        }
    }
    $persona1 = new Persona();
    $empleado1 = new Empleado();

    echo $persona1->setNombre("Carlos");
    echo $persona1->setEdad(35);
    echo $empleado1->setNombre("Tito");
    echo $empleado1->setEdad(36);
    echo $empleado1->setSueldo(800000);
    echo $persona1->getNombre();
    echo "<br>".$persona1->getEdad();
    echo "<br>".$empleado1->getNombre();
    echo "<br>".$empleado1->getEdad();
    echo "<br>".$empleado1->getSueldo();
    
    ?>

</body>
</html>