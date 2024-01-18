
<?php
// Conectar a la BBDD
$mysqli = new mysqli("localhost","root", "");

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}else{


    $mysqli -> select_db("comentarios");

    // Construir la consulta SQL para actualizar el nombre
    $sql = "UPDATE usuarios SET nombre = 'Juan' WHERE id = 1";

    // Ejecutar la consulta
    if ($mysqli->query($sql) === TRUE) {
        echo "Actualización exitosa.";
    } else {
        echo "Error al actualizar: " . $mysqli->error;
    }

}
// Cerrar la conexión
$mysqli->close();
?>