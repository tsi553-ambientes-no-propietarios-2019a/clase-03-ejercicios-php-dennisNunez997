<?php

    $usuario =
    [
        'Pedro' => 1726062829,
        'Juan' => 10291837,
        'Ana' => 928472,
        'Luisa' => 932087
    ];
    
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["password"];

    foreach($usuario as $user => $pass)
    {
        //echo $user . "=>" . $pass . "<br>";
        if($nombre == $user && $contraseña == $pass)
        {
            echo $user . " contraseña: " . $pass;
        }
        
        
    }
?>