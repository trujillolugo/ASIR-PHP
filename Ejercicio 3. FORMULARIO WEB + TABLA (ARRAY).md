# FORMULARIO WEB + TABLA (ARRAY)

* * *

``` <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$nombres = array ("Rosalinda", "William", "Linda", "Pilar");
echo "<table border=’2px’><tr><th> Nombre: </th></tr>";
$contador = 0;
foreach ($nombres as $nombre){
    echo "<tr><td>".$nombre."</td></tr>";
}
echo "<br>";
$edades = array ("15", "32", "27", "37");
echo "<table border=’2px’><tr><th> Edad: </th></tr>";
$contador = 1;
foreach ($edades as $edad){
    echo "<tr><td>".$edad."</td></tr>";
}
echo "</br>";
?>

</body>
</html>
