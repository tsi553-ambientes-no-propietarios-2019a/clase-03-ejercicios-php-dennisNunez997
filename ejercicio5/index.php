<?php

/*
 Sabiendo que la función rand nos retorna un valor aleatorio entre un rango de dos enteros:

$num=rand(1,100);
En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre 1 y 100.

Hacer un programa que lo muestre por pantalla al valor generado. Mostrar además si es menor o igual a 50 o si es mayor.

Para imprimir el contenido de una variable también utilizamos el comando echo:

echo $num;
 */


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
                    <label>Presione el boton "ALEATORIO"</label>
                    
                </div>

                <div class = "form-group">
                    
                    <button class="btn btn-primary" type="submit">Aleatorio</button>

                </div>
            </form>
        </div>
    </body>

</html>