<?php
session_start();  // Busca si existe una sesión activa

$conexion = mysqli_connect("localhost", "root", "", "libreria_registro"); // El servidor/ usuario /contraseña/nombre de la base de datos
if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario y sanitizarlos
    $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
    $autor = mysqli_real_escape_string($conexion, $_POST['autor']);
    $editorial = mysqli_real_escape_string($conexion, $_POST['editorial']);
    $fecha_de_publicacion = mysqli_real_escape_string($conexion, $_POST['fecha_de_publicacion']);
    $categoria = mysqli_real_escape_string($conexion, $_POST['categoria']);
    $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);

    // Insertar libro en la base de datos
    $query = "INSERT INTO libros (titulo, autor, editorial, fecha_publicacion, categoria, descripcion) 
              VALUES ('$titulo', '$autor', '$editorial', '$fecha_de_publicacion', '$categoria', '$descripcion')";

    $ejecutar = mysqli_query($conexion, $query);
    // Verificar si la inserción fue exitosa
    if ($ejecutar) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . mysqli_error($conexion);
    }
    // Cerrar la conexión
    mysqli_close($conexion);
}
?>