<?php
// Conectar a la base de datos
$mysqli = new mysqli("localhost","root", "");

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}else{

    $mysqli -> select_db("comentarios");
    $sql = "INSERT INTO usuarios (id, nombre) VALUES (7,'Ernesto')";

    // Ejecutar la consulta
    if ($mysqli->query($sql) === TRUE) {
        echo "Registro insertado correctamente.";
    } else {
        echo "Error al insertar el registro: " . $mysqli->error;
    }

}
// Cerrar la conexión
$mysqli->close();
?>