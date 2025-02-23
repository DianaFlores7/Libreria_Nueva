<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Libro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main>
        <div class="contenedor_de_todo">
            <h1>Registrar Libro</h1>
            <form action="Insertar_conexion.php" method="POST">
                <input type="text" name="titulo" placeholder="Título" required>
                <input type="text" name="autor" placeholder="Autor" required>
                <input type="text" name="editorial" placeholder="Editorial" required>
                <input type="date" name="fecha_publicacion" placeholder="Fecha de Publicación" required>
                <input type="text" name="categoria" placeholder="Categoría" required>
                <input type="text" name="descripcion" placeholder="Descripción" required>
                <button type="submit">Registrar</button>
            </form>
        </div>
    </main>
</body>
</html>

