<?php

    class Usuarios{
        function registrar($datos){
            $conn = conexion("root","");
            $consulta = $conn->prepare("INSERT INTO usuarios(CodUsua, nombre, usuario, pass, pais,
                                        profesion, edad) VALUES(null, :nombre, :usuario, :pass, :pais,
                                        :profesion, :edad)");
            $consulta->execute(array(
                ':nombre'=>$datos[0],
                ':usuario'=>$datos[1],
                ':pass'=>$datos[2],
                ':pais'=>$datos[3],
                ':profesion'=>$datos[4],
                ':edad'=>$datos[5]
            ));
        }

        function verificar($usuario){
            $conn = conexion("root","");
            $consulta = $conn->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
            $consulta->execute(array(':usuario'=>$usuario));
            $resultado = $consulta->fetchAll();
            return $resultado;
        }
    }

?>