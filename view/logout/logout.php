<?php
    require_once("../../config/conexion.php");
    $conectar = new Conectar();
    session_destroy();
    header("location:". $conectar->ruta() . "index.php");
    exit();
?>