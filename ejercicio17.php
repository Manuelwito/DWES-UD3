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

// Elabora un script de PHP incrustado en el lenguaje de marcas HTML5 adecuado de forma que contenga un formulario como el de la imagen y cumpla los siguientes criterios:
   // Nombre, apellidos, dirección y estudios elegidos deben ser seguros.
   // Instituto debe comenzar por las letras IES.
   // Wifi, cable y fibra, solo se puede elegir una (radio button).
   // Días de la semana es un select multiple.
   // Preferencias puede elegir las que quiera.
   // El texto final debe ser seguro.
   // Todos los campos menos el texto final TIENEN estar rellenos.
$nombre="";
$apellidos="";
$direccion="";
$instituto="";
$estudio="";
$errorEstudios="";
$errorNombre="";
$errorApellidos="";
$errorDireccion="";
$errorInstituto="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["nombre"])){
            $errorNombre = "el nombre debe estar relleno";
        }
        else{
            $usuario= $_POST["nombre"];
        }
        if(empty($_POST["apellidos"]))
        {
            $errorApellidos = "apellidos debe estar relleno";
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
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
            <span style="color:red">*<?php echo $errorNombre ?></span>
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>
            <span style="color:red">*<?php echo $errorApellidos ?></span>
        </p>
        <p>
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion"/>
            <span style="color:red">*<?php echo $errorDireccion ?></span>
        </p>

        <input type="Radio" name="wifi" value="ffffff" defaultChecked> Wifi 
        <input type="Radio" name="cable" value="ffffff" defaultChecked> Cable 
        <input type="Radio" name="fibra" value="ffffff" defaultChecked> Fibra 
<br> 
<br> 
        <p>
            <label for="instituto">Instituto</label>
            <input type="text" name="instituto"/>
            <span style="color:red">*<?php echo $errorInstituto ?></span>
        </p>

        <p>
            <label for="estudios">Estudios Elegidos</label>
            <input type="text" name="estudios"/>
            <span style="color:red">*<?php echo $errorEstudios ?></span>
        </p>
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
