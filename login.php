<?php 
    session_start();
    require('funciones.php');
    require('clases/Usuarios.php');

    if(isset($_POST['acceder'])){
        $pass = hash('sha512', $_POST['pass']);
        $datos = array(limpiar($_POST['usuario']), $pass);

        if(!datosVacios($datos)){
            if(!strpos($datos[0], " ")){
                $resultados = Usuarios::verificar($datos[0]);
                if(!empty($resultados)){
                    if($datos[1] == $resultados[0]["pass"]){
                        $_SESSION['codUsua'] = $resultados[0]["codUsua"];
                        $_SESSION['nombre'] = $resultados[0]["nombre"];
                        header('location: index.php');
                    }
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="contenedor-form">
        <h1>Login</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="usuario" class="input-control" placeholder="Usuario">
            <input type="password" name="pass" class="input-control" placeholder="Contraseña">
            <input type="submit" name="acceder" value="Acceder" class="log-btn">
        </form>
    </div>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>