<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
<?php
    // Carga las funciones matemáticas
    include 'matematicas.php';
    $numero = $_POST['numero1'];
    $numero1 = $_POST['numero2'];
            if (!isset($numero)) 
            {
                ?>
                Introduzca un número para calcular la suma<br>
                <form action=funciones1.php method="post">
                <input type="number" name="numero1" ><br>
                <input type="number" name="numero2" ><br>
                <input type="submit" value="Aceptar">
                </form>
<?php
            } else 
            {
                $resultado = sumar($numero1, $numero2);
                echo "<p>El resultado de la suma es " . $resultado . "</p>";
                    
            }

            
?>
</body>
