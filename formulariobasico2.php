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
$usuario="";
$contrasenya="";
$errorUsuario="";
$errorContrasenya="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["usuario"])){
            $errorUsuario = "el usuario debe estar relleno";
        }
        else{
            $usuario= $_POST["usuario"];
        }
        if(empty($_POST["contrasenya"]))
        {
            $errorContrasenya = "la contraseña debe estar rellena";
        }
        else{
            $contrasenya=$_POST["contrasenya"];
        }
        if(!preg_match('/\w{8,}/', $usuario)){
            $errorUsuario = "el usuario '<b>$usuario</b>' no es correcto, debe contener...";
        }
    }
?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario"/>
            <span style="color:red">*<?php echo $errorUsuario ?></span>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya"/>
            <span style="color:red">*</span>
        </p>
        <p>
<input type="submit" name="enviar" value="Aceptar"/>
<input type="reset" name="cancelar" value="Cancelar"/>
  </p>
    </form>

</body>
</html>
