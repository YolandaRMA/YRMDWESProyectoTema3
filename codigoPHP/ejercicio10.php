<html>
    <head>
        <meta charset="UTF-8">
        <title>10</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
    </head>
    <body>
        <header>Mostrar el path del fichero ejecutado</header>

        <main>
            <?php
            echo "<h3>Contenido del fichero actual</h3>";

            // Se utiliza la constante __FILE__ para obtener la ruta completa del fichro PHP que se está ejecutando.

            //file_get_contents() para leer todo el contenido del fichero y almacenarlo en la variable $contenido como una cadena de texto.
            $contenidoFicheroactual = file_get_contents(__FILE__);

            // Se utiliza htmlspecialchars() para mostrar el código como texto HTML,las etiquetas HTML y los símbolos del código se muestran en pantalla
            // en lugar de interpretarse como parte de la página web.
            echo "<pre>" . htmlspecialchars($contenidoFicheroactual) . "</pre>";
            ?>
        </main>
        <footer>
            <p><a href="../indexProyectoTema3.php">Home</a></p>
            <div class="footer-text">
                <p>2026-27 IES Los Sauces. &copy; Todos los derechos reservados.<a href="../index.html">Yolanda Rodríguez Moreno</a></p>                <time datetime="2026-09-30">Última actualización: 30 de Septiembre de 2026</time>
            </div>
        </footer>
    </body>
</html>
