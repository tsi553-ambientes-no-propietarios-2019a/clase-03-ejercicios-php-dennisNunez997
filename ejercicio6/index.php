<?php

/*

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */

    function palabra($variable)
    {
        $contar = strlen($variable);

        $vocales = substr_count($variable, 'a')+substr_count($variable, 'a')+
                    substr_count($variable, 'i')+substr_count($variable, 'o')+
                    substr_count($variable, 'u')+substr_count($variable, 'A')+
                    substr_count($variable, 'E')+substr_count($variable, 'I')+
                    substr_count($variable, 'O')+substr_count($variable, 'U');
        
        $a = substr_count($variable, 'a');
        $e = substr_count($variable, 'e');
        $i = substr_count($variable, 'i');
        $o = substr_count($variable, 'o');
        $u = substr_count($variable, 'u');

        echo "la palabra ". $variable . " tiene " . $contar . " letras";
        echo "<br>";
        echo "Numero de vocales a: ". $a . "<br>";
        echo "Numero de vocales e: ". $e . "<br>";
        echo "Numero de vocales i: ". $i . "<br>";
        echo "Numero de vocales o: ". $o . "<br>";
        echo "Numero de vocales u: ". $u . "<br>";

        echo "<br>";

        echo "el total de vocales de " . $variable . " son: " . $vocales;
        

    }


?>



<!DOCTYPE html>

<html>

    <head>
        <title>registro</title>
        <meta charset= "UTF-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>

    <body>
        <div class = "container">
            <form action = "aleatorio.php" method = "POST">
                <h1 class = 'page-header'>Obtener un numero aleatorio</h1>
                <div class= "form-group">
                    <label>
                    
                    <?php

                    $variable = 'murcielago';
                    echo palabra($variable);
                    ?>

                    </label>
                    
                </div>
            </form>
        </div>
    </body>
</html>


