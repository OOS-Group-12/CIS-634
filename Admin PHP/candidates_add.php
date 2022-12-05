<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$position = $_POST['position'];
		$platform = $_POST['platform'];
		$status = $_POST['status'];
		$email = $_POST['email'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
						                $from ="sireeshreddy1999@gmail.com";
                    $to=$email;
                    $otp=$firstname."_".$lastname;

                    $subject="candidate-registered";
 
                    // Generating otp with php rand variable
                    $message=strval($otp);
                    $headers="From:" .$from;
                    if(mail($to,$subject,$message."______THANKS FOR REGISTERING WITH US_________AND YOUR STATUS IS____".$status,$headers)){
                        	echo "<script>alert('You are successfully registered');</script>";

                    }else
                        echo("mail send faild");

		$sql = "INSERT INTO candidates (position_id, firstname, lastname, photo, platform,status,email) VALUES ('$position', '$firstname', '$lastname', '$filename', '$platform','$status','$email')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: candidates.php');
?>