<?php
	//Start session
	session_start();
	
	include('db-connect/db.php');
		
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = $_POST['password'];
	//Create query
	$qryrps = $db->prepare("SELECT * FROM rps WHERE username='$username' and password='$password' and typ='rps'");
	$qryrps->execute();
	$countrps = $qryrps->rowcount();
	
	$qrybrd = $db->prepare("SELECT * FROM board WHERE username='$username' and password='$password' and typ='board'");
	$qrybrd->execute();
	$countbrd = $qrybrd->rowcount();
	

	
	$qryfar = $db->prepare("SELECT * FROM farmer WHERE username='$username' AND password='$password'");
	$qryfar->execute();
	$countfar = $qryfar->rowcount();
	
	//Check whether the query was successful or not
	if($countrps > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsrps = $qryrps->fetch();
		$_SESSION['SESS_RPS_ID'] = $rowsrps['rps_id'];
		session_write_close();
		header("location: rps/index.php");
		exit();
	}

	else if($countbrd > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsbrd = $qrybrd->fetch();
		$_SESSION['SESS_BRD_ID'] = $rowsbrd['brd_id'];
		session_write_close();
		header("location: board/index.php");
		exit();
	}

	else if($countfar > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsfar = $qryfar->fetch();
		$_SESSION['SESS_FARMER_ID'] = $rowsfar['id'];
		session_write_close();
		header("location: farmer/index.php");
		exit();
	}

	else 
	{
		//Login failed
		echo "<script>alert('Check your username and password and try again'); window.location='index.php'</script>";
		exit();
	}
?>
