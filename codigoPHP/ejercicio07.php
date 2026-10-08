
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../webroot/css/estilos.css">
        <title></title>
    </head>
    <body>
        <main>
            <?php
            /* FILE es una constante especial de PHP contiene la ruta completa del fichero que se está ejecutando.
              basename() recibe una ruta y se queda solamente con el nombre del último fichero. 

            $nombreFichero = basename($rutaFichero);

// Mostramos el nombre del fichero
            echo "El fichero que se está ejecutando es: " . $nombreFichero;*/

            /*
              forma mas sencilla FILE obtiene la ruta completa del archivo que se está ejecutando en este momento.
              basename() elimina la ruta y deja solamente el nombre del archivo.*/
              $nombreFichero = basename(__FILE__);

              // Mostramos el nombre del fichero
              echo "El fichero que se está ejecutando es: " . $nombreFichero;
             
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
