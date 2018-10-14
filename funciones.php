<?php

    function conexion($usuario, $contra){
        try{
            $conn = new PDO('mysql:host=localhost;dbname=red_social',$usuario,$contra);
            return $conn;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    function datosVacios($datos){
        $vacio = false;
        $tam = count($datos);

        for($i = 0; $i < $tam; $i++){
            if(empty($datos[$i])){
                $vacio = true;
                break;
            }
        }
        return $vacio;
    }

    function limpiar($datos){
        $tam = count($datos);

        for($i = 0; $i < $tam; $i++){
            if($i != 2){
                $datos[$i] = htmlspecialchars($datos[$i]);
                $datos[$i] = trim($datos[$i]);
                $datos[$i] = stripcslashes($datos[$i]);
            }
        }        
        return $datos;
    }

    function verificarSession(){
        if(!isset($_SESSION['CodUsua'])){
            header('location: login.php');
        }
    }

?>