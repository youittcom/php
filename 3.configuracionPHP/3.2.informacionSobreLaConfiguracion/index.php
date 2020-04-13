<?php
    echo "Informacion sobre la Configuracion de PHP:<br>
            PHP dispone de dos funciones bastante útiles relacionadas con la configuración de PHP<br>
            y así poder obtener informacion, éstas son: phpversion()y phpinfo().<br>
            Ésta primera devuelve el número de versión que se esté utilizando en ese momento.<br>
            La segunda muestra una gran cantidad de información sobre la configuracion que se tiene<br>
            en el PHP que esté instalado. La versión de PHP que estamos utilizando también esta disponible<br>
            a través de la constante predefinida PHP_VERSION.<br>
            Sintaxis:<br>
            Basta con poner ->  phpinfo();<br>
                                phpversion();<br>
            Para phpinfo(): ..... booleano phpinfo([entero qué])<br>
                     tipo:        booleano -> tipo de valor<br>
                     qué:         Naturaleza de la información deseada. Utilizar una o varias de las siguientes<br>
                                  constantes:<br><br>
                                  INFO_GENERAL(1): Información general.<br>
                                  INFO_CREDITS(2): Información sobre los autores.<br>
                                  INFO_CONFIGURATION(4): Información sobre la configuración (valores de las directivas)<br>
                                  INFO_MODULES(8): Información sobre los módulos cargados respectivamente<br>
                                  INFO_ENVIROMENT(16): Información sobre el entorno.<br>
                                  INFO_VARIABLES(32): Valores detodas las variables predefinidas.<br>
                                  INFO_LICENSE(64): Iformación de Licencia.<br>
                                  INFO_ALL(-1): Toda la información. Valor predeterminado.<br><br>";
    ?>
<a href="../../index.php">VOLVER</a>

