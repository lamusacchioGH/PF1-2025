<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $pais = [
    "España" =>
        [
        "nombre" => "España",
        "lengua" => "Castellano",
        "moneda" => "Euro"
        ],
];
echo $pais["España"]["moneda"];
?>

</body>
</html>