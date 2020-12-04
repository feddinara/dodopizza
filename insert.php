<?php 	
	$con = mysqli_connect('127.0.0.1', 'root', '', 'urok35'); 
	$query = mysqli_query($con, "SELECT * FROM pizza WHERE id='{$_GET["id"]}'");
	$res = $query->fetch_assoc();
	mysqli_query($con, "INSERT INTO trash (title, img, cost) 
	VALUES ('{$res['title']}', '{$res['img']}', '{$res['cost']}')");
	header('Location: index.php');
 ?>