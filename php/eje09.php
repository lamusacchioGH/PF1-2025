<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eje09</title>
</head>
<body>
    <?php 
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $sexo = $_POST["sexo"];
    $estado = $_POST["ecivil"];
    $deseo = isset($_POST["deseo"]);
    $acepto = isset($_POST["acepto"]);


    function validar($nombre, $apellido){
        if($nombre==null){
            throw new Exception(" el nombre no puede estar vacío ");
        }
        else if ($apellido==null){
            throw new Exception(" el apellido no puede estar vacío ");
        }else return true;
    }
    

        try{
            validar($_POST["nombre"], $_POST["apellido"]);
            echo "Los valores ingresados en el formulario son<br>";
            echo "Nombre: $nombre<br>";
            echo "Apellido: $apellido<br>";
            echo "Sexo: $sexo<br>";
            echo "Estado Civil: $estado<br>";
            if($deseo){
                echo "Recibir Información: Si<br>";   
            }else
            echo "Recibir Información: No<br>";
            if($acepto){
                echo "Acepto Condiciones: Si<br>";   
            }else
            echo "Acepto condiciones: No<br>";
        }catch (Exception $e){
            echo "Ha habido una excepción,".$e->getMessage();
            echo '<a href="ejercicio11.html"> Rehacer formulario</a>';
        }
    ?>
</body>
</html>