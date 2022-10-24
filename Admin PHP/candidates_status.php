<?php
	include 'includes/session.php';

	if(isset($_POST['status2'])){
		$status = $_POST['status22'];


                    $sql1 = "SELECT * FROM candidates";
                    $query1 = $conn->query($sql1);
                    while($row1 = $query1->fetch_assoc()){
                    
                        
                        				                $from ="sireeshreddy1999@gmail.com";
                    $to=$row1['email'];;
                    $otp=$firstname."_".$lastname;

                    $subject="candidate-registered";
 
                    // Generating otp with php rand variable
                    $message=strval($otp);
                    $headers="From:" .$from;
                    if(mail($to,$subject,$message."______THANKS FOR REGISTERING WITH US_________AND YOUR STATUS IS____".$status."_____AS OF NOW. ADMIN WILL REVIEW YOUR APPLICATION SOON YOU WILL BE INTIMATED THANKS ONCE AGAIN",$headers)){
                        	echo "<script>alert('You are successfully registered');</script>";

                    }else
                        echo("mail send faild");

                    }

		$sql = "UPDATE candidates SET status = '$status'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidates Status updated successfully';
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