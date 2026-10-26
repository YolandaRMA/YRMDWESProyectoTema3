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

        <main>
            <?php
            /**
             * Ejercicio 24
             * Recoge el nombre, la fecha de nacimiento y el sueldo de una persona.
             * Si algún dato es incorrecto, muestra el error y conserva las respuestas válidas.
             */
// Enlace a la librería que contiene las funciones de validación.
            require_once '../core/231018libreriaValidacion.php';

// Indica si todos los datos introducidos son correctos.
            $entradaOK = true;

// Almacena los mensajes de error de cada campo.
            $aError = [
                'nombre' => '',
                'fechaDeNacimiento' => '',
                'sueldo' => ''
            ];

// Almacena las respuestas del usuario.
            $aRespuesta = [
                'nombre' => '',
                'fechaDeNacimiento' => '',
                'sueldo' => ''
            ];

// Comprueba si se ha enviado el formulario.
            if (isset($_REQUEST['enviar'])) {

                // Comprueba que el nombre contiene entre 1 y 100 caracteres alfabéticos.
                // Parámetros: texto que se valida, longitud máxima, longitud mínima y si es obligatorio (1 = sí).
                $aError['nombre'] = validacionFormularios::comprobarAlfabetico(
                        $_REQUEST['nombre'], 100, 1, 1
                );

                // Comprueba que la fecha está entre el 01/01/1900 y el día actual.
                // Parámetros: fecha introducida, fecha máxima, fecha mínima y si es obligatoria (1 = sí).
                $aError['fechaDeNacimiento'] = validacionFormularios::validarFecha(
                        $_REQUEST['fechaDeNacimiento'],
                        date('Y-m-d'),
                        '01/01/1900',
                        1
                );

                // Comprueba que el sueldo es un número con coma decimal y no es negativo.
                // Parámetros: número introducido, valor máximo, valor mínimo y si es obligatorio (1 = sí).
                $aError['sueldo'] = validacionFormularios::comprobarFloatMonetarioES(
                        $_REQUEST['sueldo'], PHP_FLOAT_MAX, 0, 1
                );

                // Si algún campo tiene un mensaje de error, la entrada no es correcta.
                foreach ($aError as $error) {
                    if (!empty($error)) {
                        $entradaOK = false;
                    }
                }
            } else {
                // Si todavía no se ha enviado el formulario, no se muestran las respuestas.
                $entradaOK = false;
            }

// Si todos los datos son correctos, muestra las respuestas.
            if ($entradaOK) {

                $aRespuesta['nombre'] = $_REQUEST['nombre'];

                // Convierte la fecha introducida en un objeto DateTime.
                $aRespuesta['fechaDeNacimiento'] = new DateTime($_REQUEST['fechaDeNacimiento']);

                // Sustituye la coma decimal por un punto y convierte el sueldo en número.
                $aRespuesta['sueldo'] = (float) str_replace(',', '.', $_REQUEST['sueldo']);

                echo '<h3>Respuestas del usuario</h3>';
                echo '<p>Nombre: ' . htmlspecialchars($aRespuesta['nombre']) . '</p>';
                echo '<p>Fecha de nacimiento: ' . $aRespuesta['fechaDeNacimiento']->format('d/m/Y') . '</p>';
                echo '<p>Sueldo: ' . number_format($aRespuesta['sueldo'], 2, ',', '.') . ' €</p>';
                echo '<a href="ejercicio24.php">Volver al formulario</a>';
            } else {
                ?>

                <h2>Cuestionario personal</h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre"
                           value="<?php
            // Recupera el nombre anterior si es correcto y lo protege para mostrarlo en HTML.
            // Si está vacío o tiene errores, deja el campo vacío.
            echo empty($aError['nombre']) ? htmlspecialchars($_REQUEST['nombre'] ?? '') : '';
                ?>">
                    <span style="color: red;"><?php echo $aError['nombre']; ?></span>
                    <br>

                    <label for="fechaDeNacimiento">Fecha de nacimiento:</label>
                    <input type="date" name="fechaDeNacimiento" id="fechaDeNacimiento"
                           value="<?php
                       // Recupera la fecha anterior si es correcta; si no, deja el campo vacío.
                       echo empty($aError['fechaDeNacimiento']) ? htmlspecialchars($_REQUEST['fechaDeNacimiento'] ?? '') : '';
                       ?>">
                    <span style="color: red;"><?php echo $aError['fechaDeNacimiento']; ?></span>
                    <br>

                    <label for="sueldo">Sueldo:</label>
                    <input type="text" name="sueldo" id="sueldo"
                           value="<?php
                       // Recupera el sueldo anterior si es correcto; si no, deja el campo vacío.
                       echo empty($aError['sueldo']) ? htmlspecialchars($_REQUEST['sueldo'] ?? '') : '';
                       ?>">
                    <span style="color: red;"><?php echo $aError['sueldo']; ?></span>
                    <br>

                    <button type="submit" name="enviar">Enviar</button>

                </form>

                           <?php
                       }
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
