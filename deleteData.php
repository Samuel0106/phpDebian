<?php
	include 'conexion.php';

	$id=$_POST['id'];
	$connect->query("DELETE FROM personaje WHERE id=".$id);

?>