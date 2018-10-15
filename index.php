<?php
    session_start();
    require('funciones.php');

    verificarSession();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="icomoon/style.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Red Social</title>
</head>
<body>
    <?php include('header.php'); ?>
    
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>