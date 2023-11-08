<html>
<head>

    <?php 
    //De esta forma se puede generar una página web en HTML de forma dinámica       
    print "<title> Este es el ej2 </title>"; ?>

</head>
<body>

<?php


   print "<h1> Este es un encabezado </h1>";
   $variable1="Hola mundo";
   print "<h2> Esta es la variable1 =$variable1</h2>";
   echo $variable1;
   $variable2=4;
   $variable3=2;
   //se puede utilizar operaciones aritméticas +,*
   $s5=$variable2+$variable3;

   print "<p>Vamos a realizar la suma de variable2 y variable3 el resultado es: $s5 </p>";
 
?>


</body>
</html>