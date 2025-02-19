<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Libreria</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main>

    <div class="contenedor_de_todo">  
        <h1>Libreria LIAAM</h1>

        <div class="Caja_registro">   <!--Parte del diseño visual, fondo o texto informativo.-->
            <div class="contenedor_registro">  <!--Contiene el formulario, donde el usuario realmente interactúa.-->
            <form action="Insertar_conexion.php" method="POST">              <!-- Define el alcance del formulario: Todo lo que esté  es parte del formulario, y los datos que se envían -->
                <h2>Registrar libros</h2> <!--Más grande y en negrita -->
                <input type="text" placeholder="titulo"  name ="titulo"> 
                <input type="text" placeholder="autor"   name="autor">
                <input type="text" placeholder="editorial" name="editorial">
                <input type="date" placeholder="fecha de publicacion" name="fecha_de_publicacion">
                <input type="text" placeholder="categoria" name="categoria">
                <input type="text" placeholder="descripcion" name ="descripcion">
                <button type="submit">Registrar</button> 
            </form>
        </div>
    </div>

    <!-- Formulario de búsqueda por título -->
    <div class="Caja_busqueda">
    <div class="contenedor_busqueda"> 
    <form action="mostrar_datos.php" method="post"> 
        <h2>Buscar Libro</h2>
            <label for="busqueda">Buscar por Título:</label>
            <input type="text" id="busqueda" name="busqueda" required>
            <button type="submit">Buscar</button>
        </form>
    </div>

    <div class="Caja_acceso"> 
        <div class="contenedor_acceso"> 
            <h1>Libreria LIAAM</h1>
            <h2>Acceder a libros Registrados</h2>
            <form action="mostrar_datos.php" method="post">
                <button type="submit">Acceder</button> 
            </form>
        </div>
    </div>

    </main>
    <script src="scrip.js"></script>
</body>
</html>