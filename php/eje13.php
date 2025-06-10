<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Celda{
            private $nro;
            private $texto;
            public function setNro($nro){
                $this->nro = $nro;
            }
            public function setTexto($texto){
                $this->texto = $texto;
            }
            public function getTexto(){
                return $this->texto;
            }
            public function getNro(){
                return $this->nro;
            }
        }
        class Tabla {
            private $celdas = array(); 
            public function add($celda){
            $this->celdas[]=$celda;
            }
            public function mostrar(){
                for ($i = 0; $i < 10; $i++){
                    echo "<table border = 1>";
                    echo "<tr>";
                    echo "<td>";
                    echo "Celda nro ".$this->celdas[$i]->getNro().": ".$this->celdas[$i]->getTexto()." ".$i."<br>";  
                    echo "</td>";
                    echo "</tr>";
                }
            }

        }
        
        
        function cargadato($tabla){
           
            for ($i=0;$i<10;$i++){

                $celda = new Celda();
                $texto = "Texto celda";
                $celda->setNro($i);
                $celda->setTexto($texto);
                $tabla->add($celda);
            }
        }
        $tabla1 = new Tabla();
        echo cargadato($tabla1);
        echo $tabla1->mostrar();
    ?>
</body>
</html>