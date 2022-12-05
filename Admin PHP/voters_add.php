<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$status = $_POST['status'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		$filename1 = $_FILES['proof']['name'];
		if(!empty($filename1)){
			move_uploaded_file($_FILES['proof']['tmp_name'], '../proof/'.$filename1);	
		}
		//generate voters id
		$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$voter = substr(str_shuffle($set), 0, 15);
		                $from ="sireeshreddy1999@gmail.com";
                    $to=$email;
                    $otp=$voter;
                    $subject="voter-id";
                    $message=strval($otp);
                    $headers="From:" .$from;
                    if(mail($to,$subject,"YOUR VOTER ID IS______ ".$message."___AND YOUR PASSWORD IS____".$_POST['password'],$headers)){
                        	echo "<script>alert('You are successfully register voter id send to registered mail check in inbox or spam');</script>";
                    }else
                        echo("mail send faild");
                        		$sql1 = "SELECT * FROM voters WHERE email = '$email'";
		$query1 = $conn->query($sql1);
		$row1 = $query1->fetch_assoc();
		if($row1>1){
		    			$_SESSION['error'] = "Already Exists";
	header('location: voters.php');
		}
		else if($row1<1){
		    		$sql = "INSERT INTO voters (voters_id, password, firstname, lastname, photo,email,proof,status) VALUES ('$voter', '$password', '$firstname', '$lastname', '$filename','$email','$filename1','$status')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';
	header('location: voters.php');
		}
		else{
			$_SESSION['error'] = $conn->error;
	header('location: voters.php');
		}

		}
	}
?>