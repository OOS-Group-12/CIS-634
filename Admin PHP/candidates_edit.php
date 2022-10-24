<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$position = $_POST['position'];
		$platform = $_POST['platform'];
		$status = $_POST['status'];
		$email = $_POST['email'];
				                $from ="sireeshreddy1999@gmail.com";
                    $to=$email;
                    $otp=$firstname."_".$lastname;

                    $subject="candidate-registered";
 
                    // Generating otp with php rand variable
                    $message=strval($otp);
                    $headers="From:" .$from;
                    if(mail($to,$subject,$message."______THANKS FOR REGISTERING WITH US_________AND YOUR STATUS IS____".$status."_____AS OF NOW.",$headers)){
                        	echo "<script>alert('You are successfully registered');</script>";

                    }else
                        echo("mail send faild");

		$sql = "UPDATE candidates SET firstname = '$firstname', lastname = '$lastname', position_id = '$position', platform = '$platform',status = '$status',email='$email' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: candidates.php');

?>