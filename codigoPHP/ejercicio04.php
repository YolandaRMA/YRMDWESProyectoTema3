<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../webroot/css/estilos.css">
        <title>04</title>
    </head>
    <body>
        <header>
            <h1>Mostrar la  fecha y hora actual en Oporto formateada en portugués</h1>
        </header>
        <main>
            <?php
            // Se establece la zona horaria de Lisboa.
            date_default_timezone_set('Europe/Lisbon');

            // Se crea un objeto DateTime con la fecha y hora actuales.
            $oFecha = new DateTime();

            // Se crea un array con los nombres de los días de la semana en portugués.
            // Las posiciones van de 0 (domingo) a 6 (sábado).
                        $aDias = [
                "domingo", "segunda-feira", "terça-feira", "quarta-feira",
                "quinta-feira", "sexta-feira", "sábado"
            ];

            // Se crea un array con los nombres de los meses en portugués.
            // La posición 0 corresponde a enero y la posición 11 a diciembre.
            $aMeses = [
                "janeiro", "fevereiro", "março", "abril", "maio", "junho",
                "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"
            ];

            // Se obtiene el número del día de la semana.
            // format("w") devuelve 0 para domingo y 6 para sábado.
            $diaSemana = $aDias[$oFecha->format("w")];

            // Se obtiene el nombre del mes.
            // format("n") devuelve un número del 1 al 12.
            // Se resta 1 porque las posiciones del array empiezan en 0.
            $mes = $aMeses[$oFecha->format("n") - 1];

            // Se muestra el título del ejercicio.
            echo "<h3>Fecha y hora actual en portugués</h3>";

            // Se muestra la fecha utilizando los nombres de los arrays
            // y el resto de los datos obtenidos del objeto DateTime.
            echo "<p>Hoje é " . $diaSemana . ", " .
            $oFecha->format("d") . " de " . $mes . " de " .
            $oFecha->format("Y") . " e são " .
            $oFecha->format("H:i:s") . ".</p>";
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
