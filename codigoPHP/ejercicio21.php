<html>
    <head>
        <meta charset="UTF-8">
        <title>00</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
    </head>
    <body>
        <header>
            <h1>
                Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre
                las preguntas y las respuestas recogidas.
            </h1>
        </header>

        <main>

            <form name= "miFormulario" action="Tratamiento.php" method="post">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required minlength="2" maxlength="100" placeholder="Introduce aquí tu nombre"><br> 
                
                <label for="password">Introduce una contraseña:</label><br>
                <input type="password" id="password" name="password" required minlength="6"><br>
                
                <label for="telefono">Teléfono:</label><br>
                <input type="telefono" id="telefono" name="telefono" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="Ej: 123-456-789" required><br>
                
                <input type="submit" value="Enviar">
                <input type="reset" value="Restablecer">
            </form>
            <?php
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
