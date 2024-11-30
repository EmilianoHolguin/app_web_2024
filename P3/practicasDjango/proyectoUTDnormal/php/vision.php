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
           <h1>Vision</h1>
           <hr>
           <p>Mi visión es convertirme en un referente en el desarrollo de aplicaciones web confiables y funcionales, destacándome por ofrecer soluciones tecnológicas que impacten positivamente en la vida de los usuarios y en la eficiencia de las organizaciones. Aspiro a mantener un enfoque centrado en la innovación, la accesibilidad y la seguridad, priorizando siempre la satisfacción del cliente y la adaptación a un entorno digital en constante evolución. Busco contribuir al progreso tecnológico mediante el desarrollo de herramientas que no solo optimicen procesos, sino que también inspiren confianza y valor en cada interacción.</p>
       </div>
    </section>
    <footer>
        <p>Curso de PHP con Emiliano &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>
</html>