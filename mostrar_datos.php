<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
    <!-- Incluye DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- Incluye jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluye DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "", "libreria_registro");
if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

$busqueda = '';
if (isset($_POST['busqueda'])) {
    $busqueda = mysqli_real_escape_string($conexion, $_POST['busqueda']);
}

//consulta a la base de datos con filtro por título
$query = "SELECT * FROM libros WHERE titulo LIKE '%$busqueda%'";
$resultado = mysqli_query($conexion, $query);
//Verificar si hay resultados y mostrar 
if (mysqli_num_rows($resultado) > 0) {
    echo "<table id='example' class='display' style='width:100%'>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Fecha de Publicación</th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>{$fila['titulo']}</td>
                <td>{$fila['autor']}</td>
                <td>{$fila['editorial']}</td>
                <td>{$fila['fecha_publicacion']}</td>
                <td>{$fila['categoria']}</td>
                <td>{$fila['descripcion']}</td>
                <td>
                    <a href='editar_libro.php?id={$fila['id']}'>Editar</a>
                    <a href='eliminar_libro.php?id={$fila['id']}' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este libro?\")'>Eliminar</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros.";
}
//Cierre de la conexión
mysqli_close($conexion);
?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
</body>
</html>

