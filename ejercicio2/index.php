<?php
/**
 * Problema propuesto:
 *
 * Implementar una función que muestre un título centrado en pantalla, y la llamaremos posteriormente dos veces.
*/


function titulo($variable)
{
    for($i = 1; $i<=2; $i++)
    {
        echo  "<h1 align = 'center'>". $variable ."</h1>" ."<br>";
    }
}

echo titulo('primer titulo');

?>