<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$color = $_POST["color"];

print 
"<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Generador de páginas web</title>
</head>";

switch ($color) {
    case 'rojo':
        print "<body style='background-color:red'>";
        break;
    case 'azul':
        print "<body style='background-color:blue'>";
        break;
}
print "
<h1>Bienvenido ".$nombre." ".$apellido."
    <h1>Formulario PHP</h1>
    <form action='procesar.php' method='post'>
        <label for='nombre'>Nombre:</label>
        <input type='text' id='nombre' name='nombre' required>
        <br>
        <label for='apellido'>Apellido:</label>
        <input type='text' id='apellido' name='apellido' required>
        <br>
       
        <label for=''color'>Selecciona el color que quieres mostrar en el fondo de la pagina</label>
        <select name='color'>
            <option value='rojo'> rojo </option> 
            <option value='azul'> azul </option> 
         </select>
        
        <input type='submit' value='Enviar'>
    </form>
";

for($i=1;$i<4;$i++)
{
     print "<br> La i es".$i."<br>";
}
for($i=1;$i<3;$i++)
{
     print "<img src='".$i.".png' alt='Foto'> <br>";
}


print
"</body>
</html>";
?>