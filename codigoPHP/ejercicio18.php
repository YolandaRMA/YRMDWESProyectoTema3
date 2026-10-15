<html>
    <head>
        <meta charset="UTF-8">
        <title>18</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
    </head>
    <body>
        <header> Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</header>

        <main>
            <?php
            $aTeatro = [];
            for ($fila = 0; $fila < 20; $fila++) {
                for ($asiento = 0; $asiento < 15; $asiento++) {
                    $aTeatro[$fila][$asiento] = null;
                }
            }
            $aTeatro[0][0] = "Ana";
            $aTeatro[0][1] = "Luis";
            $aTeatro[2][4] = "Marta";
            $aTeatro[5][7] = "Pedro";
            $aTeatro[19][14] = "Lucia";
            $aTeatro[0][0] = "Ana";
            $aTeatro[0][1] = "Luis";
            $aTeatro[2][4] = "Marta";
            $aTeatro[5][7] = "Pedro";
            $aTeatro[19][14] = "Lucia";


            // Función que recibe el teatro y muestra los asientos ocupados con foreach().
            function mostrarConForeach($aTeatro) {
                foreach ($aTeatro as $numeroFila => $aFila) {
                    foreach ($aFila as $numeroAsiento => $persona) {
                        if ($persona != null) {
                            echo "Fila " . ($numeroFila + 1);
                            echo ", asiento " . ($numeroAsiento + 1);
                            echo ": $persona<br>";
                        }
                    }
                }
            }

            // Función que recibe el teatro y muestra los asientos ocupados con while().
            function mostrarConWhile($aTeatro) {
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
            }

            // Función que recibe el teatro y muestra los asientos ocupados con for().
            function mostrarConFor($aTeatro) {
                for ($fila = 0; $fila < 20; $fila++) {
                    for ($asiento = 0; $asiento < 15; $asiento++) {
                        if ($aTeatro[$fila][$asiento] != null) {
                            echo "Fila " . ($fila + 1);
                            echo ", asiento " . ($asiento + 1);
                            echo ": " . $aTeatro[$fila][$asiento] . "<br>";
                        }
                    }
                }
            }


            // llamada a las funciones para mostrar resultados
            echo "<h3>Recorrido con foreach()</h3>";
            mostrarConForeach($aTeatro);

            echo "<h3>Recorrido con while()</h3>";
            mostrarConWhile($aTeatro);

            echo "<h3>Recorrido con for()</h3>";
            mostrarConFor($aTeatro);
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
