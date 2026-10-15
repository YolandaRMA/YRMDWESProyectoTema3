<html>
    <head>
        <meta charset="UTF-8">
        <title>15</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
    </head>
    <body>
        <header>
            <h1>Crear e inicializar un array asociativo con el sueldo percibido de lunes a domingo.
                <br> Recorrer el array para calcular el sueldo percibido durante las emana.</h1>
        </header>

        <main>
            <?php
            
            // Creamos un array asociativo clave día  valor sueldo
            $aSueldoDia = [
                "Lunes" => random_int(20, 60), //se prueba ramdon para numero aleatorio
                "Martes" => 55,
                "Miercoles" => 60,
                "Jueves" => 20,
                "Viernes" => 30,
                "Sabado" => 100,
                "Domingo" => 10
            ];

            // Inicializa acumulador 
            $totalSueldoSemana = 0;
            echo "<h3>El sueldo obtenido a lo largo de la semana es:</h3>";
            // Recorre el array para mostrar/ sumar sueldos
            foreach ($aSueldoDia as $dia => $sueldoDia) {//obtiene clave-valor en cada vuelta
                echo "$dia: $sueldoDia euros<br>";
                $totalSueldoSemana += $sueldoDia;//se suma sueldo al acum
                }
            // Mostramos el sueldo total de la semana
            echo "<h3>Total del sueldo semanal es de: $totalSueldoSemana euros</h3>";
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
