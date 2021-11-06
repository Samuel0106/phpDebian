<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $coste_energia = $_POST['coste_energia'];

    $consultar=$connect->query("SELECT * FROM personaje WHERE nombre='".$nombre."' and coste_energia='".$coste_energia."'");

    $resultado=array();

    while($extraerDatos=$consultar->fetch_assoc()){
        $resultado[]=$extraerDatos;
    }

    echo json_encode($resultado);

    ?>