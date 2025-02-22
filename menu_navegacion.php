<?php
include 'conexion.php';

$conexion = mysqli_connect("localhost", "root", "", "libreria_registro");
if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Navegación</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>  
    <div class="mi_menu">
        <a href="index.php">Menú</a>
        <a href="registrar_libro.php">Registrar Libro</a>
        <a href="mostrar_libros.php">Mostrar Libros</a>
        <a href="editar_libro.php">Editar Libro</a>
    </div>
</body>
</html>