<?php

/**
 * Problema Propuesto:
 * Confeccionar un formulario que solicite la carga del nombre de usuario y su clave en dos oportunidades. En la página que se procesan los datos del formulario 
 * implementar una función que imprima un mensaje si las dos claves ingresadas son distintas.
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
            <form action = "usuario.php" method = "POST">
                <h1 class = 'page-header'>Registro de usuario</h1>

                <div class= "form-group">
                    <label>Ingrese su nombre</label>
                    <input type = "text" name = "nombre" class = "form-control" style="width:300px;height:30px"/>
                </div>

                <div class= "form-group">
                    <label>Ingrese su contraseña</label>
                    <input type = "password" name = "contraseña" class = "form-control" style="width:300px;height:30px"/>
                </div>

                <div class= "form-group">
                    <label>Ingrese de nuevo su contraseña</label>
                    <input type = "password" name = "verificar_contraseña" class = "form-control" style="width:300px;height:30px"/>
                </div>

                <div class = "form-group">
                    
                    <button class="btn btn-primary" type="submit">Iniciar</button>

                </div>
            </form>
        </div>
    </body>

</html>