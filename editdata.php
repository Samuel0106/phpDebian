<?php
	include 'conexion.php';

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$coste_energia = $_POST['coste_energia'];
	$connect->query("UPDATE personaje SET nombre='".$nombre."', coste_energia='".$coste_energia."' WHERE id=". $id);
?>