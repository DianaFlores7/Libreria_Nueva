<?php
$conexion = mysqli_connect("localhost", "root", "", "libreria_registro");
if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

$id = mysqli_real_escape_string($conexion, $_GET['id']);
$query = "SELECT * FROM libros WHERE id = '$id'";
$resultado = mysqli_query($conexion, $query);
$libro = mysqli_fetch_assoc($resultado);

if (!$libro) {
    die('Libro no encontrado.');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main>
        <div class="contenedor_de_todo">
            <h1>Editar Libro</h1>
            <form action="actualizar_libro.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
                <input type="text" name="titulo" value="<?php echo $libro['titulo']; ?>" required>
                <input type="text" name="autor" value="<?php echo $libro['autor']; ?>" required>
                <input type="text" name="editorial" value="<?php echo $libro['editorial']; ?>" required>
                <input type="date" name="fecha_publicacion" value="<?php echo $libro['fecha_publicacion']; ?>" required>
                <input type="text" name="categoria" value="<?php echo $libro['categoria']; ?>" required>
                <input type="text" name="descripcion" value="<?php echo $libro['descripcion']; ?>" required>
                <button type="submit">Actualizar</button>
            </form>
        </div>
    </main>
</body>
</html>