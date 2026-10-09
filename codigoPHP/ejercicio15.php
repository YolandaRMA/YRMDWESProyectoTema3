<html>
    <head>
        <meta charset="UTF-8">
        <title>00</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
    </head>
    <body>
        <header>
            <<h1>Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante lasemana.(Array asociativo con los nombres de los días de la semana).</h1>
        </header>

        <main>
            <?php
            $aSueldoDia = [
                "Lunes" => random_int(20, 60),
                "Martes" => 55,
                "Miercoles" => 60,
                "Jueves" => 20,
                "Viernes" => 30,
                "Sabado" => 100,
                "Domingo" => 10
            ];
            // Inicializamos la variable que acumulará el salario semanal
            $totalSueldoSemana = 0;
            echo "<h3>Salario obtenido a lo largo de la semana</h3>";
            // Recorremos el array obteniendo la clave dia y el valor salario
            foreach ($aSueldoDia as $dia => $salarioDia) {
                echo "$dia: $salarioDia euros<br>";
                // Sumamos el salario del día al total semanal
                $totalSueldoSemana += $salarioDia;
            }
            // Mostramos el salario total de la semana 
            echo "<br><h3>El total del salario semanal es: " . $totalSueldoSemana . " euros</h3>";
            ?>
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
