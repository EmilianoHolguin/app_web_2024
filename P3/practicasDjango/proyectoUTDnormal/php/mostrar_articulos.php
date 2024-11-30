<?php 
session_start();
if (isset($_SESSION['user'])) {
    // Usuario autenticado
} else {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Inicio|PHP Proyecto UTD
    </title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>
<body>
    <header>
        <div id="logotipo">
            <img src="../img/logophp.png" alt="Imagen Django" title="Django">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php" >Inicio</a></li>
            <li><a href="acercade.php">Acerca de</a></li>
            <li><a href="mision.php">Misión</a></li>
            <li><a href="vision.php">Visión</a></li>
            <li><a href="mostrar_articulos.php">Ver Articulos</a></li>
            <li><a href="mostrar_categorias.php">Ver Categorias</a></li>
            <li><a href="cerrar_sesion.php">Cerrar sesión</a></li>
        </ul>
    </nav>
    <section id="content">
       <div class="box">
            <h1>Mostrar artículos</h1>
            <?php
            include_once('conexion.php');

            // Consulta SQL
            $sql = "SELECT 
                        articulos.id, 
                        articulos.descripcion AS articulo, 
                        articulos.pu, 
                        articulos.cantidad, 
                        articulos.imagen, 
                        categorias.descripcion AS categoria 
                    FROM articulos 
                    INNER JOIN categorias 
                    ON articulos.id_categoria = categorias.id";

            $ejecucion_sql = $conexion->query($sql);

            // Verificar si hay resultados
            if ($ejecucion_sql->num_rows > 0) {
                echo '<table border="1">';
                echo '<tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Precio Unitario</th>
                        <th>Cantidad</th>
                        <th>Categoría</th>
                        <th>Imagen</th>
                    </tr>';
                
                while ($fila = $ejecucion_sql->fetch_assoc()) {
                    echo '<tr>
                            <td>' . htmlspecialchars($fila['id']) . '</td>
                            <td>' . htmlspecialchars($fila['articulo']) . '</td>
                            <td>' . htmlspecialchars($fila['pu']) . '</td>
                            <td>' . htmlspecialchars($fila['cantidad']) . '</td>
                            <td>' . htmlspecialchars($fila['categoria']) . '</td>
                            <td>';
                    if (!empty($fila['imagen'])) {
                        // Mostrar la imagen desde el campo BLOB
                        $imagen_base64 = base64_encode($fila['imagen']);
                        echo '<img src="data:image/jpeg;base64,' . $imagen_base64 . '" alt="Imagen del artículo" style="width: 100px; height: auto;">';
                    } else {
                        echo 'Sin imagen';
                    }
                    echo '</td>
                        </tr>';
                }
                
                echo '</table>';
            } else {
                echo 'No hay datos disponibles.';
            }
            ?>
            <hr>
       </div>
    </section>
    <footer>
        <p>Curso de PHP con Emiliano &copy; 2024 | Visitado el: <?php echo date("d/m/Y"); ?></p>
    </footer>
</body>
</html>
