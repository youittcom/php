<?php
echo "Constantes:<br><br>
        En PHP la función predefinida 'define()' o la palabra reservada 'const' permiten definir una constante.<br>
        Una constante en PHP (y en cualquier otro lenguaje) es una área de memoria reservada la cual está identificada<br>
        por un nombre que contiene un valor legible, pero NO MODIFICABLE en el programa.<br><br>
        Para definir una constante mediante la función 'define()' se hará de la siguiente forma:<br>
        define('nombre de la constante', 'valor de la constante');<br>
        ejemplo:   define(PI, 3.1415);<br>
        Esta función devolvera TRUE en caso de crear correctamente la constante o FALSE en caso de error.<br>
        Cualquier tipo de dato escalar se puede utilizar como tipo de dato en una constante.También es posible definir<br>
        una constante de tipo Matriz utilizando la palabra clave 'const' desde la version 5.6 y con la función 'define()'<br>
        desde la versión 7.<br>
        El nombre de una constante no puede empezar por el símbolo '$'ya que este prefijo esta reservado a las variables<br>
        en PHP.Definir una constante cuyo nombre empieza por '$' no genera un error (define() devuelve TRUE). Sin embargo,<br>
        cuando se utiliza,la costante se verá como una variable no inicializada.<br>
        Con la función 'define()'el valor de la constante se puede definir con la ayuda de una expresión que utiliza<br>
        únicamente valores literales, constantes, variables, operadores o llamadas de funciones.<br>
        Desde la versión 5.6, con la palabra clave 'const', también es posible definir el valor de la constante con la<br>
        ayuda de una expresión, pero que utiliza únicamente valores literales, constantes y operadores(no llamadas de función,<br>
        ni variables).<br>
        Una vez creada, una constante no se puede modificar, ni por una nueva llamada a 'define()'(devuelve FALSE y deja<br>
        el valor de la constante inalterado), ni por asignación directa(genera un error de análisis de la secuencia de comandos).";
