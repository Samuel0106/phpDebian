<?php

	include 'conexion.php';
	
	$nombre = $_POST['nombre'];
	$coste_energia = $_POST['coste_energia'];

	$connect->query("INSERT INTO personaje (nombre,coste_energia) VALUES ('".$nombre."','".$coste_energia."')");
?>