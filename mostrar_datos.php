<?php
$conexion = mysqli_connect("localhost", "root", "", "libreria_registro");
if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

$busqueda = mysqli_real_escape_string($conexion, $_POST['busqueda']);
//consulta a la base de datos con filtro por título
$query = "SELECT * FROM libros WHERE titulo LIKE '%$busqueda%'";
$resultado = mysqli_query($conexion, $query);
//Verificar si hay resultados y mostrar 
if (mysqli_num_rows($resultado) > 0) {
    echo "<table border='1'>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Fecha de Publicación</th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>";
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

