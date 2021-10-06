<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table> 
<tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Stock  </th>
    <th>Id</th>
</tr>
    <?php 
    
    $productos = array();

    $productos[] = array("Nombre" => 'balon' , 
                        "Precio" => "5", 
                        "Stock" => "true" , 
                        "Identificador" => "4432");


    $productos[] = array("Nombre" => 'bici' , 
                        "Precio" => "4 euros", 
                        "Stock" => "si" , 
                        "Identificador" => "4402"
                        );

    foreach($productos as $producto){
        echo"<tr>";

        echo("<td>$producto[Nombre]</td>");

        echo("<td>$producto[Precio]</td>");

        echo("<td>$producto[Stock]</td>");
       
        echo("<td>$producto[Identificador]</td>");
        echo"<tr>";
    }
   
    
    
    ?>
    </table> 
</body>
</html>