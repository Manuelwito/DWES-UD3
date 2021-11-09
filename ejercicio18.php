<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>Formulario Actividad Aula</h1>

    <?php

// Elabora un script de PHP incrustado en el lenguaje de marcas HTML5 adecuado de forma que contenga un formulario con los siguientes criterios:

//2 campos de texto: Población y código postal, el primero tiene que ser solo texto y el segundo solo números. Ambos son requeridos.

//8 radio button con las provincias, de forma que solo podamos elegir una. Requerido.
//1 textarea descripción del municipio que sea seguro y no obligatorio.
//Campo de imagen no obligatorio. COMPLETA EL FORMULARIO ANTES DE PELEARTE CON ESTE APARTADO.
//Botón de envío.
//Botón de reset.

//Si todos los campos cumplen los criterios ve a una nueva página correcto.php que muestre un mensaje: ¡RECIBIDO!
//Guardalo como ejercicio18.php

$poblacion="";
$codigopostal="";


$errorPoblacion="";
$errorCp="";
$errorApellidos="";
$errorDireccion="";
$errorInstituto="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["nombre"])){
            $errorPoblacion = "el campo poblacion debe estar relleno";
        }
        else{
            $usuario= $_POST["poblacion"];
        }
        if(empty($_POST["codigoPostal"]))
        {
            $errorCp = "el campo Codigo Postal debe estar relleno";
        }
        else{
            $apellidos=$_POST["apellidos"];
        }
        if(empty($_POST["direccion"]))
        {
            $errorDireccion = "direccion debe estar relleno";
        }
        else{
            $direccion=$_POST["direccion"];
        }
        if(empty($_POST["instituto"]))
        {
            $errorInstituto = "instituto debe estar relleno";
        }
        else{
            $instituto=$_POST["instituto"];
        }

        if(!preg_match('/\bIES/', $instituto)){
            $errorInstituto = "el instituto '<b>$instituto</b>' no es correcto, debe empezr por IES...";
        }

        if(empty($_POST["estudios"]))
        {
            $errorEstudios = "Estudios debe estar relleno";
        }
        else{
            $instituto=$_POST["estudios"];
        }
    }
?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>
            <label for="poblacion">Poblacion</label>
            <input type="text" name="poblacion"/>
            <span style="color:red">*<?php echo $errorPoblacion ?></span>
        </p>
        <p>
            <label for="codigoPostal">Codigo Postal</label>
            <input type="text" name="apellidos"/>
            <span style="color:red">*<?php echo $errorCp ?></span>
        </p>
        
        <input type="Radio" name="wifi" value="ffffff" defaultChecked> Wifi 
        <input type="Radio" name="cable" value="ffffff" defaultChecked> Cable 
        <input type="Radio" name="fibra" value="ffffff" defaultChecked> Fibra 
<br> 
<br> 

        <p>
    <div>
        <select name="campoSelectMultiple[]" multiple>
            <option value="1" selected>Lunes</option>
            <option value="2" selected>Martes</option>
            <option value="3" selected>Miercoles</option>
            <option value="3" selected>Jueves</option>
            <option value="3" selected>Viernes</option>
        </select>
    </div>
<br> 
    <div>
        <strong>Preferencias</strong>
        <br> 
        Historia 1<input type="checkbox" name="camposCheckbox[]" value="1" checked>
        Geografía<input type="checkbox" name="camposCheckbox[]" value="2">
        Matemáticas<input type="checkbox" name="camposCheckbox[]" value="3">
        ciencias<input type="checkbox" name="camposCheckbox[]" value="3">
        <br> 
    </div>
    <div>
        <br/>
        <textarea name="campoTextarea"></textarea>
    </div>
<input type="submit" name="enviar" value="Aceptar"/>
<input type="reset" name="cancelar" value="Cancelar"/>
  </p>
    </form>

</body>
</html>
