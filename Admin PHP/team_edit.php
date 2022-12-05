<?php
	include 'includes/session.php';
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$about = $_POST['about'];
		$profilelink = $_POST['profilelink'];
		$sql = "SELECT * FROM team WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		$sql = "UPDATE team SET firstname = '$firstname', lastname = '$lastname',email = '$email',about = '$about',profilelink = '$profilelink' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Team Mate updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}
	header('location: team.php');
?>