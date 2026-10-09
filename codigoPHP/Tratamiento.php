
<html>
     <head>
        <meta charset="UTF-8">
        <title>ej-21</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
    </head>
    <body>
        <header>
            <h1>
                Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php 
                para que muestre las preguntas y las respuestas recogidas.
            </h1>
        </header>


        <!--        El formulario de la página anterior utiliza method="post" ,los datos que introduce el usuario llegan a esta página
                dentro de $_POST que es un array que contiene los datos enviados.
                Para acceder a un dato concreto se utiliza $_POST['nombreDelCampo']
                El nombre entre corchetes debe coincidir con el atributo name del input del formulario.
        -->

        <?php
        // se recogen los datos enviados desde el formulario mediante POST 
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];
        $telefono = $_POST['telefono'];
        
        echo "<h1>Cuestionario</h1>"; 
        echo "<p><strong>Nombre:</strong> " . $nombre . "</p>"; 
        echo "<p><strong>Contraseña:</strong> " . $password . "</p>"; 
        echo "<p><strong>Teléfono:</strong> " . $telefono . "</p>";
        ?>
        <footer>
            <p><a href="../indexProyectoTema3.php">Home</a></p>
            <div class="footer-text">
                <p>2026-27 IES Los Sauces. &copy; Todos los derechos reservados.<a href="../index.html">Yolanda Rodríguez Moreno</a></p>                <time datetime="2026-09-30">Última actualización: 30 de Septiembre de 2026</time>
            </div>
        </footer>
    </body>
</html>
