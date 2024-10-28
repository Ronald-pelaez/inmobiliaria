<?php
// incluir el archivo de conexión
require 'index.php'; 

// Llamar a la función y asignar la conexión a una variable
$conexion = conexionBD();

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$id = $_POST['id'];
$correo = $_POST['correo'];
$tel = $_POST['telefono'];
$apt = $_POST['apartamento'];

// Preparar la consulta SQL
$sql = "INSERT INTO interesados (nombre, id, correo, tel, apt) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conexion, $sql);

// Verificar si la preparación fue exitosa
if ($stmt) {
    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "sssss", $nombre, $id, $correo, $tel, $apt);
    
    // Ejecutar la consulta
    if (mysqli_stmt_execute($stmt)) {

        exit(); 
    } else {
       echo "Error: " . mysqli_error($conexion); // Muestra el error de la consulta
    }

    // Cerrar la declaración
    mysqli_stmt_close($stmt);
} else {
  //  echo "Error al preparar la consulta: " . mysqli_error($conexion); // Muestra el error en la preparación
}

// Cerrar la conexión
mysqli_close($conexion);
?>