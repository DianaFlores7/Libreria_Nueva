<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Librería</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
</head>
<body>
    <main>
    <h1>Libreria Liam</h1>

    <nav>    <!-- Se usa para agrupar enlaces de navegación, como menús o barras de navegación.-->
        <ul>   <!--Agrupa elementos de lista sin un orden específico.-->
            <li><a href="index.php">Inicio</a></li>
            <li><a href="mostrar_datos.php">Libros</a></li>
            <li><a href="registrar.php">Registrar</a></li> 
            <li><a href="Editar_libros.php">Editar</a></li>
        </ul>
    </nav>

    <div class="contenedor_de_todo">  

        <!-- Caja de bienvenida -->
        <div class="Caja_bienvenida">
            <h2>Explora nuestra colección de libros Y encuentra tus favoritos</h2>
        </div>  

        <div class="contenedor_acceso"> 
            <div class="Caja_acceso"> 
                <h2>Acceder a libros Registrados</h2>
                <form action="mostrar_datos.php" method="post">
                    <button type="submit">Ver Libros</button> 
                </form>
            </div>
        </div>

       
            <div class="contenedor_registro1">  <!--Contiene el formulario, donde el usuario realmente interactúa.-->
            <div class="Caja_registro1">  
            <form action="registrar_libros.php" method="POST">              <!-- Define el alcance del formulario: Todo lo que esté  es parte del formulario, y los datos que se envían -->
                <h2>Registrar libros</h2> <!--Más grande y en negrita -->

                <button type="submit">Registrar</button> 
            </form>
        </div>
    </div
                </form>
            </div>
        </div>

    </main>
    <script src="scrip.js"></script>
    <script>
        // Agregar evento de clic al botón
        document.getElementById('irARegistrar').addEventListener('click', function() {
            document.getElementById('registro').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>
</html>