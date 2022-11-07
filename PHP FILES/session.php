<?php
	include 'conn.php';


	$sql = "SELECT * FROM admin";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>