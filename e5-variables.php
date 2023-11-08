<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//487
//21,5
//“Hola mundo”
//true
//false
//[maria, juan, pedro]
$numero1 = 487;
print "<p> Muestra el tipo de la variable numero1: ".var_dump($numero1)."</p>";

$numero2 = 21.57;
var_dump($numero2);
$frase="Hola mundo";
var_dump($frase);
$verdadero = true;
var_dump($verdadero);
$falso = false;
var_dump($falso);
//$listanombres = [array(]"maria","juan", "pedro");
$listanombres=["maria","juan","pedro"];
var_dump($listanombres);
echo $listanombres[1];

?>
    
</body>
</html>