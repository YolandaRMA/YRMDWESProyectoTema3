
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../webroot/css/estilos.css">
        <title>06</title>
    </head>
    <body>

        <header>
            <<h1>Calcular fecha y día de la semana en 60 días</h1>
        </header>
        <main>
            <?php
            // Creamos un objeto DateTime con la fecha actual
            $fechaActual = new DateTime();

// modify() permite modificar una fecha "+60 days" añade 60 días a la fecha 
            $fechaFutura = $fechaActual->modify("+60 days");

            /* format() permite decidir cómo queremos mostrar la fecha.
              d = día con dos cifras, m = mes con dos cifras,Y = año con cuatro cifras */


            $fechaFormateada = $fechaFutura->format("d/m/Y");

// format("N") devuelve el número del día de la semana.

            $numeroDia = $fechaFutura->format("N");

// array relacionando cada número con su nombre.

            $diasSemana = [
                1 => "lunes",
                2 => "martes",
                3 => "miercoles",
                4 => "jueves",
                5 => "viernes",
                6 => "ssbado",
                7 => "domingo"
            ];

//fecha que habrá dentro de 60 días
            echo "Dentro de 60 días será: " . $fechaFormateada . "<br>";

//se utiliza el numero obtenido para buscar el nombre del día  dentro de $diasSemana.

            echo "Será " . $diasSemana[$numeroDia];

            /*

             */
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
