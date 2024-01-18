<html>
<head>
<title></title>
<body>
 
<?php
 
$mysqli = new mysqli("localhost","root", "");
  if ($mysqli->connect_error){
         print "error en la conexión";
  }
  else
  {
          $mysqli -> select_db("comentarios");
          $sql = "select * from comentario";
          $respuesta =$mysqli->query($sql);
    
         
          if($respuesta)
          {
              $fila=$respuesta->fetch_assoc();
       
              while($fila)
              {
                print $fila["comment"]."<br>";
                $fila=$respuesta->fetch_assoc();
              }
              $respuesta->close();
           }else{
             print "Ha fallado la consulta";
          }
   
    $mysqli->close();
  
  }
?>
</body>
</html>