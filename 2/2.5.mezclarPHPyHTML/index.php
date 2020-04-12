<?php

echo "Mezclar PHP y HTML:<br><br>
        Existen muchos enfoques para mezclar codigo PHP y HTML en una misma página.<br>
        Sin embargo,estos enfoques se basan en dos principios simples:<br>
        1º que la página incluya una o varias inclusiones de codigo PHP en el HTML.<br>
        1º que el codigo PHP sea el que genere texto que se integre en la pagina HTML<br>
           que se envía al navegador. Lo que supone que cualquier texto comprensible, puede<br>
           generarse por codigo PHP(texto simple, HTML, javaScript,...).<br><br>
        (los siguientes ejemplos están escritos en el propio cógido. Es posible que en el navegador<br>
          solo se observen frases ue a simple vista no tengan mucho sentido) 'ver codigo'";?>
<?php
/*
 * Ejemplo 1 de página que contiene codigo PHP en varios lugares
 */

//declaración de variables que se utilizarán mas adelante
//esta primera sección de codigo PHP no genera ninguna salida en
//el codigo HTML que le sigue(no hay ninguna llamada a la funcion echo() )
$nombre = 'Oliver';
$titulo_pagina = 'Ediciones ENI presentan...';
$dia = date("d/m/Y"); // fecha del dia actual
$hora = date("H:i:s"); // hora actual
//cerramos el primer bloque de código PHP
?>
<!DOCTYPE html>
    <html xmlns = "http://www.w3.org/1999/xhtml" lang="es">
    <head>
        <meta charset="UTF-8">
        <title>
            <?php /* mostramos el titulo */echo $titulo_pagina;?>
        </title>
    </head>
    <body>
        <p>
            <?php /* Muestra el nombre de usuario:
                   * Las etiquetas de negrita <b> y del salto de linea
                   * <br> están incluidas en la cadena enviada por echo
                   */
                    echo "¡Hola <b>$nombre</b>!<br>";
                    //mostramos la fecha y la hora
                    echo "Hoy estamos a dia $dia, son las $hora";?>
        </p>
    </body>
</html>
<?php
/*
 * Ejemplo 2: pagina generada en su totalidad por codigo PHP
 */
//declaración de variables que se utilizarán más adelante
$nombre = 'Santi';
$titulo_pagina = 'Ediciones ENI presentan...';
$dia = date("d/n/Y"); //fecha actual
$hora = date("H:i:s");//Hora actual
echo '<!DOCTYPE html>';
echo '<html xmlns = "http://www.w3.org/1999/xhtml" lang="es">';
echo '<head><title>zdcsd</title>';
echo '<meta charset="UTF-8">';
echo '<title>$titulo_pagina</title>';
echo '</head>';
echo '<body>';
echo '<p>';
echo "¡Hola <b>$nombre</b>!<br>";
echo "Hoy estamos a dia $dia, son las $hora";
echo '</p>';
echo '</body>';
echo '</html>';
?>
<a href="../../index.php">VOLVER</a>
