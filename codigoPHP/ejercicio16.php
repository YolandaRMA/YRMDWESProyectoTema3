<html>
    <head>
        <meta charset="UTF-8">
        <title>00</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
    </head>
    <body>
        <header>Recorrer el array de sueldos mediante funciones</header>

        <main>
            <?php
            // Array asociativo dia-sueldo
            $aSueldoDia = [
                "Lunes" => random_int(20, 60),
                "Martes" => 55,
                "Miercoles" => 60,
                "Jueves" => 20,
                "Viernes" => 30,
                "Sabado" => 100,
                "Domingo" => 10
            ];
            
            //mostrarSueldos() muestra información en pantalla
            //calcularSueldoSemanal() devuelve un resultado que se guarda en $totalSueldoSemana.
            
            
           
            // Función que recibe el array y muestra el sueldo de cada día.
            // No devuelve ningún valor.
            function mostrarSueldos($aSueldoDia) {
                foreach ($aSueldoDia as $dia => $sueldoDia) {
                    echo "$dia: $sueldoDia euros<br>";
                }
            }

            // Función que recibe el array y devuelve la suma de todos los sueldos.
            function calcularSueldoSemanal($aSueldoDia) {
                return array_sum($aSueldoDia);
            }

            // Se muestran los sueldos diarios
            echo "<h3>Sueldo obtenido a lo largo de la semana</h3>";
            mostrarSueldos($aSueldoDia);

            // Se calcula y muestra el sueldo total semanal
            $totalSueldoSemana = calcularSueldoSemanal($aSueldoDia);
            echo "<h3>Total del sueldo semanal: $totalSueldoSemana euros</h3>";
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
