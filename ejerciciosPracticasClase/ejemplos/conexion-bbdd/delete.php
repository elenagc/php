<?php
// Conectar a la base de datos
$mysqli = new mysqli("localhost","root", "");

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}else{

    $mysqli -> select_db("comentarios");

    // Sentencia SQL para borrar el usuario
    $sql = "DELETE FROM usuarios WHERE id = 1";

    // Ejecutar la consulta
    if ($mysqli->query($sql) === TRUE) {
        echo "Registro borrado exitosamente";
    } else {
        echo "Error al borrar el registro: " . $mysqli->error;
    }
}
// Cerrar la conexión
$mysqli->close();
?>