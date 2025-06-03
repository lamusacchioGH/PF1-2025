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
            $this->nombre = $nombre;
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

    $persona1.setNombre("Carlos");
    $persona1.setEdad(35);
    $empleado.setNombre("Tito");
    $empleado.setEdad(36);
    $empleado.setSueldo(800000);
    echo $persona1.getNombre();
    echo $persona1.getEdad();
    echo $empleado1.getNombre();
    echo $empleado1.getEdad();
    echo $empleado1.getSueldo();
    
    
    
    ?>
</body>
</html>