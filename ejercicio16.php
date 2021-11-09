<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // include 'funciones2.inc.php';
        // include_once 'funciones2.inc.php';
    require 'funciones2.inc.php';
    
    $num1 = 3;
    $num2 = 7;
    
        //Elabora un script de PHP incrustado en el lenguaje de marcas HTML5 adecuado de forma que:
        //Se declare 1 función multiplicacion cuyo resultado sea la multiplicación de los dos argumentos que recibe la función.
        //Muestra el resultado de llamar a la función con los valores 3 y 7.
        //Almacena la función en un fichero nuevo denominado funciones.inc.php.
        //Incluye (con include) el fichero en ejercicio16.php.
        //Incluye (con include_once) el fichero funciones2.inc.php ¿Qué sucede?
        //Incluye (con require) el fichero funciones2.inc.php ¿Qué sucede?
            
    $resultado = multiplicacion($num1 , $num2);

    echo $resultado;
    
    ?>
</body>
</html>