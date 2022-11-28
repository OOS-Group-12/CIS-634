<?php
	include 'includes/session.php';
	if(isset($_POST['status1'])){
		$status = $_POST['status11'];
		$sql = "UPDATE voters SET status = '$status'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voters Status updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}
	header('location: voters.php');
?>