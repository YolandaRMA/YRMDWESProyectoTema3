
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../webroot/css/estilos.css">
        <title></title>
    </head>
    <body>
        <header>
            <h2>Mostrar el contenido de las variables superglobales</h2>
        </header>
        <main>
            <?php
            // Guardamos las variables superglobales en un array
            $aVariablesSuperglobales = [
                '$_SERVER' => $_SERVER,
                '$_COOKIE' => $_COOKIE,
                '$_SESSION' => $_SESSION,
                '$_REQUEST' => $_REQUEST,
                '$_GET' => $_GET,
                '$_POST' => $_POST,
                '$_FILES' => $_FILES,
                '$_ENV' => $_ENV
            ];

            // Recorremos las variables superglobales
            foreach ($aVariablesSuperglobales as $nombre => $superglobal) {

                echo "<h3>Contenido de $nombre</h3>";
                // Mostramos el contenido de cada superglobal con <pre> para que navegador no colapse espacios ni ignore saltos de línea
                echo "<pre>";
                print_r($superglobal);
                echo "</pre>";
            }
            ?>
        </main>
        <footer>
            <p><a href="../indexProyectoTema3.php">Home</a></p>
            <div class="footer-text">
                <p>2026-27 IES Los Sauces. &copy; Todos los derechos reservados.<a href="../index.html">Yolanda Rodríguez Moreno</a></p>
                <time datetime="2026-09-30">Última actualización: 30 de Septiembre de 2026</time>
            </div>
        </footer>    
    </body>
</html>
