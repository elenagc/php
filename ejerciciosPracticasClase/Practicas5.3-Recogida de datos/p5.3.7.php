<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h2>
        Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas. Se pagarán 12 euros por hora.

        </h2>

        <h3>
          <br>Práctica 5.3.7. Recogida de datos
        </h3>
      </div>

      <div id="content">
        Por favor, introduzca las horas: <br>
        <form action="p5.3.7.php" method="post">
          Horas <input type="number" name="horas"><br>
          <input type="submit" value="Calcula">
        </form>
       
        <?php
          
        
          $horas = $_POST['horas'];
          
          if ($horas != null)
          {

            print "Su salario semanal es ";
            print $horas * 12 ."euros";
           
          }
          
        ?>
    
	   </div>
	
    </div>
  </body>
</html>