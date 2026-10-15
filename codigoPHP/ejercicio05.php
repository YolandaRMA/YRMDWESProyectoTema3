<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../webroot/css/estilos.css">
        <title>05</title>
    </head>
    <body>
        <header>
            <h1>Variable con marca de tiempo (timestamp)</h1>
        </header>
        <main>
            
        <?php
        // Se establece la zona horaria de Madrid para trabajar con la hora local.
        date_default_timezone_set('Europe/Madrid');

        // Se crea objeto DateTime con fecha y hora actuales.
        $oFecha = new DateTime();

        // Se obtiene el timestamp del objeto DateTime.
        // El timestamp es el número de segundos transcurridos desde el 1 de enero de 1970.
        $timestamp = $oFecha->getTimestamp();

        // Se muestra el valor numérico del timestamp.
        echo "<p>El timestamp actual es: " . $timestamp . "</p>";

        // Se convierte el timestamp en una fecha y hora legibles.
        // date() recibe el formato deseado y el timestamp que se quiere convertir.
        // d = día, m = mes, Y = año, H = hora, i = minutos y s = segundos.
        echo "<p>La fecha y hora del timestamp son: " .
        date("d-m-Y H:i:s", $timestamp) . "</p>";
        
        echo 'inicializándolo y mostrando solo a una variable: <br>';
        $timestamp2 = time();

        // Mostramos el valor almacenado en la variable
        echo $timestamp2;
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
