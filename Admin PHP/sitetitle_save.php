<?php
	include 'includes/session.php';
	$return = 'home.php';
	if(isset($_GET['return'])){
		$return = $_GET['return'];
	}
	if(isset($_POST['save'])){
		$title = $_POST['title'];
		$file1 = 'sitetitle.ini';
		$content1 = 'title = '.$title;
		file_put_contents($file1, $content1);
		$_SESSION['success'] = 'Site title updated successfully';
	}
	else{
		$_SESSION['error'] = "Fill up config form first";
	}
	header('location: '.$return);
?>