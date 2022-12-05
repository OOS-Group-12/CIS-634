<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['voterid'])){
		$email = $_POST['email'];

		$sql = "SELECT * FROM voters WHERE email = '$email'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find voter with the email';
		}
		else{
		    
			$row = $query->fetch_assoc();
			
					                $from ="sireeshreddy1999@gmail.com";
                    $to=$email;
                    $otp=$row['voters_id'];

                    $subject="voter-id";
                    // Generating otp with php rand variable
                    $message=strval($otp);
                    $headers="From:" .$from;
                    if(mail($to,$subject,"YOUR VOTER ID IS______ ".$otp."___AND YOUR HASHED PASSWORD IS____".$row['password'],$headers)){
                        $_SESSION["username"]=$email;
                        $_SESSION["OTP"]=$otp;
                        $_SESSION["Email"]=$email1;
                        $_SESSION["Password"]=$password;
                        	echo "<script>alert('You are successfully register otp send to registered mail check in inbox or spam');</script>";
                        	header("location:otp.php");

                    }else
                        echo("mail send faild");

			
		}
		
	}
	else{
		$_SESSION['error'] = 'Input voter credentials first';
	}

	header('location: index.php');

?>