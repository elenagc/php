<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Imprime asignatura</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
<form action="e2.php" method="get">
    <label for="dia">Selecciona el día de la semanaa</label>
    <select name="dia">
        <option value="lunes"> lunes </option> 
        <option value="martes"> martes </option> 
        <option value="miercoles"> miercoles </option> 

    </select>
  <br/>
    <button>Enviar</button>
</form>
<?php

$dia=$_GE["dia"];
// CONDICIONAL IF ELSE
/*$a = 8;
$b = 3;
    if ($a < $b) {
        echo "a es menor que b";
    } else {
        echo "a no es menor que b";
    }


 //CONDICIONAL IF - ESLEIF- ELSE
    if ($dia == 'lunes') {
        echo 'Empresas';
    } elseif ($dia == 'martes') {
        echo 'ASO';
    } elseif ($dia == 'miercoles') {
        echo 'Inglés';
    }else {
        echo 'No has seleccionado el día';
    }   

    // SWITCH

    switch($dia) {
        case "lunes": // Bloque 1
            echo "Empresas";
        break;
        case "martes": // Bloque 2
            echo "ASO";         
        break;
        default: // Bloque 3
            echo "Estamos en el switch selecciona un día";
            
        }*/

        // BUCLES FOR
        // for (variable inicio; condicional; incremento) {
        //    ...
        //}
        for($i = 0 ; $i < 100 ; $i+=5) {

            echo "El valor es", $i,"<br>";

            }

            $cont=0;
            while($cont<100)
            {
                print "El valor es =".$cont;
                $cont=$cont+5;

            }

        


        //BUCLE WHILE (Mientras se cumpla la condición 
        //ejecuta las líneas de código que hay dentro del while)
        
        /*$i2 = 0;
        while( $i2 < 10 ) {
             echo "Estamos en el while. El valor de i2 es ", $i2,"<br>"; $i2++;
        }

        //BUCLE DO-WHILE (Hacer mientras se cumpla la condición) 
        //Se realiza mínimo la primera vez
       // $i3 = 0;
        //do {
         //    echo "El valor de i3 es ", $i3,"<br>"; $i3++;
        //} while( $i3 < 10 );

        //FOREACH para recorrer un array
        $animalesFantasticos = ['fénix', 'dragón', 'grifo', 'pegaso'];
        foreach ($animalesFantasticos as $animal) {
            echo $animal . ' ';
        } 

*/
?>
</body>
</html>