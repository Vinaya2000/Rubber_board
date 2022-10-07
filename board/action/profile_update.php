<?php
require("../auth.php");
include('../../db-connect/db.php');

	$pass2=$_POST["pass2"];
	$brd_id=$_SESSION['SESS_BRD_ID'];
		
$sql = "update board set password='$pass2' where brd_id='$brd_id' ";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						
