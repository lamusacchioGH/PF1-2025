<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class cine{
        public $salas = array();
        public function add($sala){
            $this->salas[]=$sala;
        }
        public function vender($cantidad,$sala){
            $this->salas[$sala-1]->ocuparButacas($cantidad);

            }
        }
    

    class salas{
    
        private $nro;
        private $cantidadButacas;
        private $butacasOcupadas;

        public function _contrusct($nro, $cantidadButacas){
            $this->nro = $nro;
            $this->cantidadButacas = $cantidadButacas;
        }
        public function getNro(){
            return $nro;
        }
        public function getCantBut(){
            return $cantidadButacas;
        }
        public function setButOcup($butocup){
            $this->butacasOcupadas = $butocup;
        }
        public function getButOcup(){
            return $butacasOcupadas;
        }
        public function ocuparButacas($cantidad){
            $butacasOcupadas = $butacasOcupadas + $cantidad;
        }
    


    }

    $sala1 = new salas(1,50);
    $sala2 = new salas(2,30);
    $sala3 = new salas(3,40);
    $cine1 = new cine();
    $cine1->add($sala1);
    $cine1->add($sala2);
    $cine1->add($sala3);

    for ($i = 0; $i<100; $i++){
        $sala = rand(1,3);
        $butacas = rand(1,2);
        try 
            {
                $cine1->vender($butacas,$sala);
            }catch (Exception $e){
                echo "La sala está llena".$e->getMessage();
            }
    }

    echo "$cine1->salas[0]";
    echo "$cine1->salas[1]";
    echo "$cine1->salas[2]";
    
    ?>
</body>
</html>