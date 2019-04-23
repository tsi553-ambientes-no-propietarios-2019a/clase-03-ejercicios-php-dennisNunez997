<?PHP

    $num = rand(1,100);

    //echo $num;
    
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
            <form >
                <h1 class = 'page-header'>numero aleatorio</h1>

                <div class= "form-group">
                    <label>El numero aleatorio es</label>
                    <label><?php

                        echo $num;

                        if($num%2==0)
                        {
                            echo " es par";
                        }
                        else
                        {
                            echo " es impar";
                        }

                    ?></label>
                </div>

                
            </form>
        </div>
    </body>

</html>