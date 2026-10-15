<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>01</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
        <style>
            h5{
                color:indigo
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) 
                y mostrar los datos por pantalla (echo, print, printf, print_r,var_dump).
            </h1>
        </header>

        <main>
            <?php
            //declaracion de una constante
            define("PI", 3.1416);
            echo sprintf(" constante 'PI',  contenido: %f de tipo: %s", PI, gettype(PI));

            //Declaración de variables
            $nombreProducto = "Ordenador";
            $numeroUnidades = 10;
            $precioProducto = 999.99;
            $productoDisponible = true;
            //ha continuacion se muestran las diferentes salidas para (echo, print, printf, print_r,var_dump)
            //echo
            echo "<h5> echo permite mostrar texto y el contenido de una variable.</h5>";
            echo 'La variable <span style="color:blue"> $nombreProducto </span> es de tipo ' . gettype($nombreProducto) . ' y su valor es ' . $nombreProducto . '<br>';
            echo 'La variable <span style="color:blue"> $numeroUnidades </span> es de tipo ' . gettype($numeroUnidades) . ' y su valor es ' . $numeroUnidades . '<br>';
            echo 'La variable <span style="color:blue"> $precioProducto </span> es de tipo ' . gettype($precioProducto) . ' y su valor es ' . $precioProducto . '<br>';
            echo 'La variable <span style="color:blue"> $productoDisponible </span> es de tipo ' . gettype($productoDisponible) . ' y su valor es ' . ($productoDisponible ? 'true' : 'false') . '<br><br>';

            //print
            echo "<h5>print permite mostrar texto y el contenido de una variable pero devuelve el valor 1</h5>";
            print('La variable <span style="color:blue"> $nombreProducto </span> es de tipo ' . gettype($nombreProducto) . ' y su valor es ' . $nombreProducto . '<br>');
            print('La variable <span style="color:blue"> $numeroUnidades </span> es de tipo ' . gettype($numeroUnidades) . ' y su valor es ' . $numeroUnidades . '<br>');
            print('La variable <span style="color:blue"> $precioProducto </span> es de tipo ' . gettype($precioProducto) . ' y su valor es ' . number_format($precioProducto, 2, ',', '') . ' €<br>');
            print('La variable <span style="color:blue"> $productoDisponible </span> es de tipo ' . gettype($productoDisponible) . ' y su valor es ' . ($productoDisponible ? 'true' : 'false') . '<br><br>');

            //printf
            echo "<h5> printf permite dar formato a los valores, por ejemplo, mostrar un precio con dos decimales mediante %.2f.</h5>";
            printf('La variable <span style="color:blue"> $nombreProducto </span> es de tipo %s y su valor es %s<br>', gettype($nombreProducto), $nombreProducto);
            printf('La variable <span style="color:blue"> $numeroUnidades </span> es de tipo %s y su valor es %d<br>', gettype($numeroUnidades), $numeroUnidades);
            printf('La variable <span style="color:blue"> $precioProducto </span> es de tipo %s y su valor es %.2f €<br>', gettype($precioProducto), $precioProducto);
            printf('La variable <span style="color:blue"> $productoDisponible </span> es de tipo %s y su valor es %s<br><br>', gettype($productoDisponible), $productoDisponible ? 'true' : 'false');

            //print_r
            echo "<h5> print_r permite mostrar información legible sobre el contenido de una variable especialmente útil para visualizar arrays.</h5>";
            print_r('La variable <span style="color:blue"> $nombreProducto </span> es de tipo ' . gettype($nombreProducto) . ' y su valor es ' . $nombreProducto . '<br>');
            print_r('La variable <span style="color:blue"> $numeroUnidades </span> es de tipo ' . gettype($numeroUnidades) . ' y su valor es ' . $numeroUnidades . '<br>');
            print_r('La variable <span style="color:blue"> $precioProducto </span> es de tipo ' . gettype($precioProducto) . ' y su valor es ' . $precioProducto . ' €<br>');
            print_r('La variable <span style="color:blue"> $productoDisponible </span> es de tipo ' . gettype($productoDisponible) . ' y su valor es ' . ($productoDisponible ? 'true' : 'false') . '<br><br>');

            //var_dump
            echo "<h5> var_dump muestra información detallada de la variable además de su tipo y valor.</h5>";
            echo 'La variable <span style="color:blue"> $nombreProducto </span>: ';
            var_dump($nombreProducto);
            echo 'La variable <span style="color:blue"> $numeroUnidades </span>: ';
            var_dump($numeroUnidades);
            echo 'La variable <span style="color:blue"> $precioProducto </span>: ';
            var_dump($precioProducto);
            echo 'La variable <span style="color:blue"> $productoDisponible </span>: ';
            var_dump($productoDisponible);
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
