<?php

    require('funciones.php');
    require('clases/Usuarios.php');

    $error = "";

    if(isset($_POST['registrar'])){
        $contra = hash('sha512', $_POST['contra']);
        $datos = array(
            $_POST['nombre'],
            $_POST['usuario'],
            $contra,
            $_POST['pais'],
            $_POST['profe'],
            $_POST['edad']
        );

        if(datosVacios($datos) == false){
            $datos = limpiar($datos);
            if(strpos($datos[1], " ") == false){
                if(empty(Usuarios::verificar($datos[1]))){
                    Usuarios::registrar($datos);
                }else{
                    $error .= "Usuario exite";
                }
            }else{
                $error .= "Usuario con espacios";
            }
        }else{
            $error .= "Hay campos vacios";
        }
        
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Registro</title>
</head>
<body>
    <div class="contenedor-form">
        <h1>Registrar</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="nombre" class="input-control" placeholder="Nombre">
            <input type="text" name="usuario" class="input-control" placeholder="Usuario">
            <input type="password" name="contra" class="input-control" placeholder="Contraseña">
            <input type="text" name="pais" class="input-control" placeholder="Pais">
            <input type="text" name="profe" class="input-control" placeholder="Profesión">
            <p id="edad">Edad: </p>
            <select name="edad">
                <?php for($i = 1; $i <= 120; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
                
            </select>
            <input type="submit" value="Registrar" name="registrar" class="log-btn">
        </form>
        <?php if(!empty($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <div class="registrar">
            <a href="login.php">¿Tienes cuenta?</a>
        </div>
    </div>
    
</body>
</html>