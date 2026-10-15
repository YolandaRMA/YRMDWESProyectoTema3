<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../webroot/css/estilos.css">
        <title></title>
    </head>
    <body>
        <header>
            <h1>Mostrar la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime</h1>
        </header>
        <main>
            <?php
            // Se establece la zona horaria de Madrid para obtener la fecha y hora correctas.
            date_default_timezone_set('Europe/Madrid');

            // Se crea un objeto DateTime que guarda la fecha y la hora actuales.
            // A partir de este objeto se puede consultar y dar formato a la fecha.
            $oFecha = new DateTime();
            //se establece idioma
            setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'spanish');
            echo "<h3>Fecha y hora actual</h3>";
            // Se muestra la fecha utilizando el método format() de DateTime que por def muestra en inglés aunque se haya utilizado setlocale()
            // Este método utiliza letras especiales para representar cada parte:
            // l = nombre del día de la semana en inglés.
            // d = día del mes con dos cifras.
            // F = nombre del mes en inglés.
            // Y = año con cuatro cifras.
            // H:i:s = hora, minutos y segundos.

            echo "<p>Utilizando format() del objeto DateTime:</p>";
            echo "<p>La fecha de hoy es: " .$oFecha->format("l d") . " de " . $oFecha->format("F") . " de " . $oFecha->format("Y") ." y la hora es: " . $oFecha->format("H:i:s") ."</p>";
            
            // Se obtiene el timestamp del objeto DateTime que representa la fecha y hora mediante el número de segundos transcurridos desde el 1 de enero de 1970.
            // Se utiliza porque strftime() recibe la fecha en ese formato.
            echo "<h3>Fecha en castellano</h3>";
            
            // Se utiliza strftime() para dar formato a la fecha según el idioma.
            // %A = nombre completo del día de la semana.
            // %d = día del mes con dos cifras.
            // %B = nombre completo del mes.
            // %Y = año con cuatro cifras.
            // Como se ha configurado el idioma español, los nombres pueden
            // aparecer en castellano si Ubuntu tiene instalado ese idioma.
            // La hora se obtiene directamente del objeto DateTime con format().
            // strftime() está obsoleta desde PHP 8.1.
            echo "<p>La fecha de hoy es: " .
            strftime("%A %d de %B de %Y", $oFecha->getTimestamp()) .
            " y la hora es: " . $oFecha->format("H:i:s") .
            "</p>";
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
