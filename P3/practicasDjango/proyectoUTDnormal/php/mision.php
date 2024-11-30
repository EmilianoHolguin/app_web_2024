<?php
session_start();
            if (isset($_SESSION['user'])) {
                
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
            <li><a href="mision.php">Mision</a></li>
            <li><a href="vision.php">Vision</a></li>
            <li><a href="mostrar_articulos.php">Ver Articulos</a></li>
            <li><a href="mostrar_categorias.php">Ver Categorías</a></li>
            <li><a href="cerrar_sesion.php">Cerrar sesión</a></li>
        </ul>
    </nav>
    <section id="content">
       <div class="box">
            <h1>Mision</h1>
            <hr>
            <p>Mi misión es diseñar y desarrollar aplicaciones web personalizadas que combinen funcionalidad, seguridad y usabilidad, con el propósito de satisfacer las necesidades específicas de cada cliente. A través de la integración de tecnologías modernas y un enfoque orientado al usuario, me comprometo a ofrecer soluciones digitales que no solo optimicen procesos, sino que también impulsen el crecimiento y la transformación digital de quienes las utilizan. Mi objetivo es garantizar calidad, innovación y excelencia en cada proyecto, promoviendo un impacto positivo en la vida de los usuarios y en sus organizaciones.</p>
       </div>
    </section>
    <footer>
        <p>Curso de PHP con Emiliano &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>
</html>