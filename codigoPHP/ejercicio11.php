<html>
    <head>
        <meta charset="UTF-8">
        <title>11</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
    </head>
    <body>
        <header>Mostrar el documento PHPDoc del proyecto</header>

        <main>
            <?php
            echo '<h2>Se crea el ejercicio a esperas de generar el doc</h2>';
            echo "<h3>Documentación PHPDoc del proyecto</h3>";

            // Se establece la ruta del directorio donde PHPDocumentor genera
            // normalmente la documentación HTML del proyecto.
            $rutaDocumentacion = "../doc/doc.php";

            // Se comprueba si existe el archivo principal de la documentación.
            if (file_exists($rutaDocumentacion)) {

                // Si el archivo existe, se muestra un enlace para abrir la documentación.
                echo '<p><a href="' . $rutaDocumentacion . '" target="_blank">Ver documentación PHPDoc</a></p>';

            } else {

            // Si el archivo no existe, se informa de que todavía no se ha generado
            // la documentación o de que la ruta debe revisarse.
    echo "<p>La documentación todavía no está generada o la ruta no es correcta.</p>";
}
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
