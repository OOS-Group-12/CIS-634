<?php
	include 'includes/session.php';
	if(isset($_POST['upload1'])){
		$id = $_POST['id'];
		$filename = $_FILES['proof']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['proof']['tmp_name'], '../proof/'.$filename);	
		}
		$sql = "UPDATE voters SET proof = '$filename' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Proof updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select voter to update photo first';
	}
	header('location: voters.php');
?>