<html>
    <head>
        <meta charset="UTF-8">
        <title>02</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
    </head>
    <body>
        <header>Variable heredoc</header>

        <main>
            <?php
            /* HEREDOC permite guardar un texto largo dentro de una variable
              sin tener que poner comillas en cada línea.
              La sintaxis comienza con <<< seguido de una palabra identificadora.
              En este caso TEXTO. */
            $texto = <<<TEXTO
            Este es un texto guardado dentro de una variable heredoc.
            Podemos escribir varias líneas.
            También podemos utilizar variables dentro del texto.
            TEXTO;

            /* La palabra final TEXTO debe escribirse EXACTAMENTE igual
              que la palabra utilizada después de <<<.
              Ademásel TEXTO final debe estar solo en su línea sin espacios ni tabulaciones delante */


            // se muestra el contenido de la variable
            echo $texto;
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
