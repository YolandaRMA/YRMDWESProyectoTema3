<html>
    <head>
        <meta charset="UTF-8">
        <title>17</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
    </head>
    <body>
        <header>Array bidimensional de reservas de un teatro</header>

        <main>
            <?php
            // Se crea un teatro de 20 filas y 15 asientos por fila.
            // Todos los asientos se inicializan como libres (null).
            $aTeatro = [];

            for ($fila = 0; $fila < 20; $fila++) {
                for ($asiento = 0; $asiento < 15; $asiento++) {
                    $aTeatro[$fila][$asiento] = null;
                }
            }
            // Se ocupan cinco posiciones
            $aTeatro[0][0] = "Ana";
            $aTeatro[0][1] = "Luis";
            $aTeatro[2][4] = "Marta";
            $aTeatro[5][7] = "Pedro";
            $aTeatro[19][14] = "Lucia";

            // 1. Recorrido con foreach()
            // Recorre las filas y los asientos sin utilizar índices manualmente.
            echo "<h3>Recorrido con foreach()</h3>";
            foreach ($aTeatro as $numeroFila => $aFila) {
                foreach ($aFila as $numeroAsiento => $persona) {
                    if ($persona != null) {
                        echo "Fila " . ($numeroFila + 1);
                        echo ", asiento " . ($numeroAsiento + 1);
                        echo ": $persona<br>";
                    }
                }
            }
            // 2. Recorrido con while()
            // Recorre las filas y los asientos mediante contadores.
            echo "<h3>Recorrido con while()</h3>";
            $fila = 0;
            while ($fila < 20) {
                $asiento = 0;
                while ($asiento < 15) {
                    if ($aTeatro[$fila][$asiento] != null) {
                        echo "Fila " . ($fila + 1);
                        echo ", asiento " . ($asiento + 1);
                        echo ": " . $aTeatro[$fila][$asiento] . "<br>";
                    }
                    $asiento++;
                }
                $fila++;
            }


            // 3. Recorrido con for()
            // Recorre las filas y los asientos utilizando índices.
            echo "<h3>Recorrido con for()</h3>";
            for ($fila = 0; $fila < 20; $fila++) {
                for ($asiento = 0; $asiento < 15; $asiento++) {
                    if ($aTeatro[$fila][$asiento] != null) {
                        echo "Fila " . ($fila + 1);
                        echo ", asiento " . ($asiento + 1);
                        echo ": " . $aTeatro[$fila][$asiento] . "<br>";
                    }
                }
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
