<html>
    <head>
        <meta charset="UTF-8">
        <title>00</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
    </head>
    <body>
        <header> Mostrar el path donde se encuentra el fichero que se está ejecutando.</header>

        <main>
            <?php
             //Con $SERVER y SCRIPT_NAME: ruta del fichero
                echo'Ruta del fichero son "$_SERVER"<br>';
                echo '<p>El path donde se encuentra el fichero que se está ejecutando: </p>' . $_SERVER['SCRIPT_FILENAME'];
                //Sin $SERVER 
                echo '<br><br><h3>Ruta del fichero sin "$_SERVER"</h3>';
                echo '<p ><b>El directorio donde se encuentra el fichero que se está ejecutando: ' . __DIR__ .'</b></p>';
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
