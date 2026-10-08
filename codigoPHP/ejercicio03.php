<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../webroot/css/estilos.css">
        <title></title>
    </head>
    <body>
        <main>
            <?php
            // Creamos un objeto DateTime con la fecha y hora actuales.
// new se utiliza para crear un nuevo objeto.
            $fechaActual = new DateTime();

            /* Creamos un formateador para decidir cómo queremos mostrar la fecha.
              Sintaxis:
              new IntlDateFormatter(
              idioma_PAÍS,
              formato_de_fecha,
              formato_de_hora,
              zona_horaria );


              FULL fecha muy completa.
              LONG fecha larga.
              MEDIUM formato intermedio.
              SHORT formato corto. */

            $formato = new IntlDateFormatter(
                    'es_ES', // Idioma español de España
                    IntlDateFormatter::FULL, // Fecha completa: día de la semana, día, mes y año
                    IntlDateFormatter::MEDIUM, // Hora con horas, minutos y segundos
                    'Europe/Madrid'            // Zona horaria de España
            );

// format() aplica el formato creado a nuestra fecha y devuelve la fecha preparada para mostrar.
            echo $formato->format($fechaActual);
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
