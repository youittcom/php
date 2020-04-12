<?php
echo "En la versión PHP 7, se aceptan estos dos tipos de etiquetas para
        introducir codigo PHP en un documento HTML. EstaS etiquetas son:<br><br>
        - la etiqueta <b>< ?php</b>... CODIGO php... <b>?></b><BR><BR>
        - la etiqueta <b>< ? </b>...CODIGO PHP... <b>?></b>.<br><br>
        La primera opción es la más común y la mas recomendada.<br><br>
        La segunda opción sólo se puede usar si esta habilitada en el archivo de configuración
        de PHP (en el php.ini) poniendo la directiva 'short_open_tag' en ON.<br><br>
        No es aconsejable usar esta segunda opción si luego no se tiene acceso a la 
        configuración del archivo (php.ini) del servidor donde vaya a estar desplegado el codigo.<br><br>
        Si el fichero solo va a contener codigo en PHP, entonces la etiqueta de cierre se puede ommitir.<br><br>";
?>
<a href="../../index.php">VOLVER</a>
