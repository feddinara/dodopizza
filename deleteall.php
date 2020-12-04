<?php
	$con = mysqli_connect('127.0.0.1', 'root','','urok35');
	$text_zaprosa = "TRUNCATE TABLE trash"; 
	mysqli_query($con, $text_zaprosa);
	header('Location: index.php');
 ?>