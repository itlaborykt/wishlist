<?php 
	$connect = mysqli_connect("MySQL-8.2", "root", "", "wishlist");
	mysqli_query($connect, 'SELECT * FROM games');

	mysqli_query($connect, "INSERT INTO games (img, names, price) VALUES ('{$_GET["img"]}', '{$_GET["names"]}', '{$_GET["price"]}')");

	header("Location: https://wishlist.local/index.php");

 ?>