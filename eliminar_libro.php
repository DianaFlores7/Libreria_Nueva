<?php
$conexion = mysqli_connect("localhost", "root", "", "libreria_registro");
if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

$id = mysqli_real_escape_string($conexion, $_GET['id']);
$query = "DELETE FROM libros WHERE id = '$id'";
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo "Eliminación exitosa";
} else {
    echo "Error al eliminar: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>