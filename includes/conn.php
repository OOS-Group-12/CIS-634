<?php
	$conn = new mysqli('localhost', 'root', '', 'uni_vote');
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>