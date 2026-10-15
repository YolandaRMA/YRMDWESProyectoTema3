<html>
    <head>
        <meta charset="UTF-8">
        <title>13</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
    </head>
    <body>
        <header>Contador de visitas desde una fecha concreta</header>

        <main>
            <?php
            // Iniciamos la sesión
            session_start();//inicia o recupera la sesión del usuario

            // Si no existe el contador, lo inicializamos a cero
            if (!isset($_SESSION['visitas'])) {//isset comprueba si ya existe la variable $_SESSION['visitas'].
                $_SESSION['visitas'] = 0;//Si no existe se inicializa a 0
            }

            // Sumamos una visita
            $_SESSION['visitas']++;//Cada vez que se carga la página se suma una visit

            // Mostramos el resultado
            echo "<h3>Contador de visitas</h3>";
            echo "Número de visitas: " . $_SESSION['visitas'];
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
