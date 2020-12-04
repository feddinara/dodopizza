<?php
	$con = mysqli_connect('127.0.0.1', 'root','','urok35');
	$text_zaprosa = "DELETE FROM trash WHERE id = '{$_GET['idid']}'"; 
	mysqli_query($con, $text_zaprosa);
	header('Location: index.php');
 ?>