<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
<?php
   print $_GET['nombre']."<br>";
   print $_GET['apellido']."<br>";
   print $_REQUEST['nombre']."<br>";
   print $_REQUEST['apellido']."<br>";
   print "<h1> Va a imprimir todo lo que contiene la variable superglobal server</h1><br>";
   print_r($_SERVER);
   print "<br>";
   $ipCliente = $_SERVER['REMOTE_ADDR'];
   echo "La dirección IP del cliente es: " . $ipCliente;
   print "<br>";
   $nombreServidor = $_SERVER['SERVER_NAME'];
   echo "El nombre del servidor es: " . $nombreServidor;
   print "<br>";
   $agenteUsuario = $_SERVER['HTTP_USER_AGENT'];
   echo "El agente de usuario del navegador es: " . $agenteUsuario; 
   print "<br>";
   $metodoSolicitud = $_SERVER['REQUEST_METHOD'];
   print "<br>";
    echo "El método de solicitud es: " . $metodoSolicitud;
    print "<br>";
    $urlSolicitada = $_SERVER['REQUEST_URI'];
    echo "La URL solicitada es: " . $urlSolicitada;
    print "<br>";
?>
    Introduce tus datos:
    <form action="superglobales.php" method="get">
    <input type="text" name="nombre"><br>
    <input type="text" name="apellido"><br>
    <input type="submit" value="Enviar">
    </form>
  </body>
</html>