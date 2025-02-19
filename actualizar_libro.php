<?php
$conexion = mysqli_connect("localhost", "root", "", "libreria_registro");
if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

$id = mysqli_real_escape_string($conexion, $_POST['id']);
$titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
$autor = mysqli_real_escape_string($conexion, $_POST['autor']);
$editorial = mysqli_real_escape_string($conexion, $_POST['editorial']);
$fecha_publicacion = mysqli_real_escape_string($conexion, $_POST['fecha_publicacion']);
$categoria = mysqli_real_escape_string($conexion, $_POST['categoria']);
$descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);

$query = "UPDATE libros SET titulo='$titulo', autor='$autor', editorial='$editorial', fecha_publicacion='$fecha_publicacion', categoria='$categoria', descripcion='$descripcion' WHERE id='$id'";
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo "Actualización exitosa";
} else {
    echo "Error al actualizar: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>