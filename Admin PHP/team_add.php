<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$about = $_POST['about'];
		$profilelink = $_POST['profilelink'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		                $from ="sireeshreddy1999@gmail.com";
                    $to=$email;
                    $subject="team-member-added";
                    $headers="From:" .$from;
                    if(mail($to,$subject,"YOUR ARE ADDED INTO THE TEAM",$headers)){
                    }else
                        echo("mail send faild");
		$sql = "INSERT INTO team (firstname,lastname,photo,email,about,profilelink) VALUES ('$firstname','$lastname','$filename','$email','$about','$profilelink')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Team Mate added successfully';
	header('location: team.php');
		}
		else{
			$_SESSION['error'] = $conn->error;
	header('location: team.php');
		}
	}
?>