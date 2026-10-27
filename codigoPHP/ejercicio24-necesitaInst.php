<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 24</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
        <style>
            /* Se configura el aspecto general de la página. */
            body {
                margin: 0;
                padding: 30px;
                font-family: Arial, sans-serif;
                background-color: #f2f0e9;
                color: #333333;
            }

            /* Se centra el contenido principal. */
            main {
                max-width: 550px;
                margin: 0 auto;
                padding: 30px;
                background-color: #ffffff;
                border-radius: 8px;
            }

            /* Se centra el encabezado del formulario. */
            header {
                margin-bottom: 25px;
                text-align: center;
            }

            /* Se establece el formato del título. */
            h1 {
                color: #435b4b;
                font-size: 25px;
            }

            /* Se separan los campos del formulario. */
            .campo {
                margin-bottom: 18px;
            }

            /* Se colocan las etiquetas encima de los campos. */
            label {
                display: block;
                margin-bottom: 7px;
                font-weight: bold;
            }

            /* Se aplica el mismo formato a los campos y desplegables. */
            input,
            select {
                box-sizing: border-box;
                width: 100%;
                padding: 10px;
                border: 1px solid #cccccc;
                border-radius: 4px;
                font-size: 15px;
            }

            /* Se identifican los campos obligatorios con fondo amarillo. */
            .obligatorio {
                background-color: #fff8d9;
            }

            /* Se identifican los campos opcionales con fondo blanco. */
            .opcional {
                background-color: #ffffff;
            }

            /* Se identifican los campos bloqueados con fondo gris. */
            .bloqueado {
                background-color: #e5e5e5;
                color: #555555;
            }

            /* Se muestran los errores en rojo. */
            .error {
                margin-top: 5px;
                color: #b3261e;
                font-size: 14px;
            }

            /* Se da formato al botón de envío. */
            button {
                width: 100%;
                padding: 12px;
                border: none;
                border-radius: 4px;
                background-color: #536b5b;
                color: #ffffff;
                font-size: 16px;
                cursor: pointer;
            }

            /* hover al pasar el ratón. */
            button:hover {
                background-color: #3f5346;
            }

            /* Se da formato a la zona de resultados. */
            .resultado {
                margin-top: 25px;
                padding: 18px;
                background-color: #edf3ee;
                border-radius: 5px;
            }

            /* Se ajusta el título de los resultados. */
            .resultado h2 {
                margin-top: 0;
                color: #435b4b;
                font-size: 20px;
            }
        </style>
    </head>

    <body>
            <header>
                <h1>Formulario de datos personales</h1>
                <p>Introduzca los datos solicitados.</p>
            </header>
        <main>
            <?php
            // Se carga la librería que contiene las funciones de validación.
            require_once '../core/231018libreriaValidacion.php';

            // inicializado de los arrays de errores y respuestas.
            $aErrores = [
                'nombre' => null,
                'fechaDeNacimiento' => null,
                'sueldo' => null,
                'sexo' => null,
                'profesion' => null
            ];

            $aRespuestas = [
                'nombre' => '',
                'fechaDeNacimiento' => '',
                'sueldo' => '',
                'sexo' => '',
                'profesion' => ''
            ];

            // Se indica inicialmente que el formulario no se ha validado.
            $entradaOK = false;

            // Se comprueba si se ha pulsado el botón de envío.
            if (isset($_REQUEST['enviar'])) {

                // Se comprueba que el nombre sea obligatorio y alfabético.
                $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico(
                    $_REQUEST['nombre'] ?? '',
                    100,
                    1,
                    1
                );

                // Se comprueba que la fecha sea obligatoria y no sea futura.
                $aErrores['fechaDeNacimiento'] = validacionFormularios::validarFecha(
                    $_REQUEST['fechaDeNacimiento'] ?? '',
                    date('d/m/Y'),
                    '01/01/1900',
                    1
                );

                // Se comprueba que el sueldo sea obligatorio y no sea negativo.
                $aErrores['sueldo'] = validacionFormularios::comprobarFloatMonetarioES(
                    $_REQUEST['sueldo'] ?? '',
                    PHP_FLOAT_MAX,
                    0,
                    1
                );

                // Se comprueba que el sexo corresponda a una opción permitida.
                $aErrores['sexo'] = in_array(
                    $_REQUEST['sexo'] ?? '',
                    ['F', 'M', 'N'],
                    true
                ) ? null : 'Debe seleccionar una opción.';

                // Se valida la profesión solo cuando se ha escrito.
                $aErrores['profesion'] = validacionFormularios::comprobarAlfabetico(
                    $_REQUEST['profesion'] ?? '',
                    100,
                    1,
                    0
                );

                // Se considera válida la entrada hasta encontrar un error.
                $entradaOK = true;

                // Se recorren los errores para comprobar si alguno contiene un mensaje.
                foreach ($aErrores as $error) {
                    if ($error !== null) {
                        $entradaOK = false;
                        break;
                    }
                }

                // Si no hay errores, se guardan las respuestas del formulario.
                if ($entradaOK) {
                    $aRespuestas['nombre'] = $_REQUEST['nombre'];
                    $aRespuestas['fechaDeNacimiento'] = $_REQUEST['fechaDeNacimiento'];
                    $aRespuestas['sueldo'] = $_REQUEST['sueldo'];
                    $aRespuestas['sexo'] = $_REQUEST['sexo'];
                    $aRespuestas['profesion'] = $_REQUEST['profesion'] ?? '';
                }
            }
            ?>

            

            <?php
            // Si los datos no son válidos, se muestra el formulario.
            if (!$entradaOK) {
            ?>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>" method="post">

                    <div class="campo">
                        <label for="nombre">Nombre:</label>

                        <!-- Se conserva el nombre si no contiene errores. -->
                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            class="obligatorio"
                            value="<?php echo htmlspecialchars(empty($aErrores['nombre']) ? ($_REQUEST['nombre'] ?? '') : '', ENT_QUOTES, 'UTF-8'); ?>"
                            required
                        >

                        <?php
                        // Se muestra el mensaje de error del nombre.
                        if ($aErrores['nombre'] !== null) {
                            echo '<p class="error">' . htmlspecialchars($aErrores['nombre'], ENT_QUOTES, 'UTF-8') . '</p>';
                        }
                        ?>
                    </div>

                    <div class="campo">
                        <label for="fechaDeNacimiento">Fecha de nacimiento:</label>

                        <!-- Se conserva la fecha introducida cuando es válida. -->
                        <input
                            type="date"
                            id="fechaDeNacimiento"
                            name="fechaDeNacimiento"
                            class="obligatorio"
                            value="<?php echo htmlspecialchars(empty($aErrores['fechaDeNacimiento']) ? ($_REQUEST['fechaDeNacimiento'] ?? '') : '', ENT_QUOTES, 'UTF-8'); ?>"
                            required
                        >

                        <?php
                        // Se muestra el mensaje de error de la fecha.
                        if ($aErrores['fechaDeNacimiento'] !== null) {
                            echo '<p class="error">' . htmlspecialchars($aErrores['fechaDeNacimiento'], ENT_QUOTES, 'UTF-8') . '</p>';
                        }
                        ?>
                    </div>

                    <div class="campo">
                        <label for="sueldo">Sueldo (€):</label>

                        <!-- Se permite introducir el sueldo con coma decimal. -->
                        <input
                            type="text"
                            id="sueldo"
                            name="sueldo"
                            class="obligatorio"
                            placeholder="Ejemplo: 1250,50"
                            value="<?php echo htmlspecialchars(empty($aErrores['sueldo']) ? ($_REQUEST['sueldo'] ?? '') : '', ENT_QUOTES, 'UTF-8'); ?>"
                            required
                        >

                        <?php
                        // Se muestra el mensaje de error del sueldo.
                        if ($aErrores['sueldo'] !== null) {
                            echo '<p class="error">' . htmlspecialchars($aErrores['sueldo'], ENT_QUOTES, 'UTF-8') . '</p>';
                        }
                        ?>
                    </div>

                    <div class="campo">
                        <label for="sexo">Sexo:</label>

                        <!-- Se muestran las tres opciones disponibles. -->
                        <select id="sexo" name="sexo" class="obligatorio" required>
                            <option value="">Seleccione una opción</option>
                            <option value="F" <?php echo (($_REQUEST['sexo'] ?? '') === 'F') ? 'selected' : ''; ?>>Femenino</option>
                            <option value="M" <?php echo (($_REQUEST['sexo'] ?? '') === 'M') ? 'selected' : ''; ?>>Masculino</option>
                            <option value="N" <?php echo (($_REQUEST['sexo'] ?? '') === 'N') ? 'selected' : ''; ?>>Prefiero no decirlo</option>
                        </select>

                        <?php
                        // Se muestra el mensaje de error del sexo.
                        if ($aErrores['sexo'] !== null) {
                            echo '<p class="error">' . htmlspecialchars($aErrores['sexo'], ENT_QUOTES, 'UTF-8') . '</p>';
                        }
                        ?>
                    </div>

                    <div class="campo">
                        <label for="profesion">Profesión (opcional):</label>

                        <!-- Se permite dejar la profesión vacía. -->
                        <input
                            type="text"
                            id="profesion"
                            name="profesion"
                            class="opcional"
                            value="<?php echo htmlspecialchars(empty($aErrores['profesion']) ? ($_REQUEST['profesion'] ?? '') : '', ENT_QUOTES, 'UTF-8'); ?>"
                        >

                        <?php
                        // Se muestra el mensaje de error de la profesión.
                        if ($aErrores['profesion'] !== null) {
                            echo '<p class="error">' . htmlspecialchars($aErrores['profesion'], ENT_QUOTES, 'UTF-8') . '</p>';
                        }
                        ?>
                    </div>

                    <div class="campo">
                        <label for="pais">País:</label>

                        <!-- Se muestra España en un campo que no permite modificarlo. -->
                        <input
                            type="text"
                            id="pais"
                            name="pais"
                            class="bloqueado"
                            value="España"
                            readonly
                        >
                    </div>

                    <!-- Se envían los datos para validarlos en PHP. -->
                    <button type="submit" name="enviar">Enviar</button>
                </form>

            <?php
            // Si los datos son válidos, se muestran los resultados.
            } else {
            ?>
                <section class="resultado">
                    <h2>Datos introducidos</h2>

                    <?php
                    // Se muestran los datos escapando los caracteres especiales.
                    echo '<p><strong>Nombre:</strong> ' . htmlspecialchars($aRespuestas['nombre'], ENT_QUOTES, 'UTF-8') . '</p>';

                    // Se convierte la fecha al formato día/mes/año.
                    $fecha = new DateTime($aRespuestas['fechaDeNacimiento']);
                    echo '<p><strong>Fecha de nacimiento:</strong> ' . $fecha->format('d/m/Y') . '</p>';

                    // Se cambia la coma por un punto y se muestran dos decimales.
                    $sueldo = str_replace(',', '.', $aRespuestas['sueldo']);
                    echo '<p><strong>Sueldo:</strong> ' . number_format((float) $sueldo, 2, '.', '') . ' €</p>';

                    // Se relaciona cada código del desplegable con su texto.
                    $sexo = [
                        'F' => 'Femenino',
                        'M' => 'Masculino',
                        'N' => 'Prefiero no decirlo'
                    ];
                    echo '<p><strong>Sexo:</strong> ' . $sexo[$aRespuestas['sexo']] . '</p>';

                    // Se muestra la profesión o se indica que no se ha introducido.
                    $profesion = $aRespuestas['profesion'] !== '' ? $aRespuestas['profesion'] : 'No indicada';
                    echo '<p><strong>Profesión:</strong> ' . htmlspecialchars($profesion, ENT_QUOTES, 'UTF-8') . '</p>';

                    // Se muestra el país establecido en el formulario.
                    echo '<p><strong>País:</strong> España</p>';
                    ?>
                </section>
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
