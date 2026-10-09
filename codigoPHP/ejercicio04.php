<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../webroot/css/estilos.css">
        <title></title>
    </head>
    <body>
        <main>
            <?php
            //objeto DateTime con la fecha y hora actuales
            $fechaActual = new DateTime();

            /* se crea un formateador para mostrar en portugués.
              'pt_PT' significa portugués de Portugal.
              FULL muestra la fecha de forma completa.
              MEDIUM muestra la hora con horas, minutos y segundos.
              Europe/Lisbon indica la zona horaria de Portugal. */

            $formato = new IntlDateFormatter(
                    'pt_PT',
                    IntlDateFormatter::FULL,
                    IntlDateFormatter::MEDIUM,
                    'Europe/Lisbon'
            );

// Aplicaformato a la fecha actual y la muestra
            echo $formato->format($fechaActual);
            
            /*
              // Establecer la zona horaria por def
                date_default_timezone_set('Europe/Lisbon');
                // crear un objet de DateTime.
                $obFecha = new DateTime();

                // locale  en español
                setlocale(LC_TIME, 'pt_PT.UTF-8', 'pt_PT', 'portuguese');


                echo("<h3>Fecha y hora actuales en Portugues.</h3><br>");     
                echo( "<p>La fecha de hoy en Portugal es :<span> " . $ofecha->format("l") . " " . $ofecha->format("d") . " de " . $ofecha->format("F") . " de " . $ofecha->format("o") . " y la hora es: " . $ofecha->format("H:i:s") . '</span></p>');
                //info parametros format : https://www.php.net/manual/es/datetime.format.php

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
