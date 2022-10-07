<?php
require("../auth.php");
include('../../db-connect/db.php');

	$pass2=$_POST["pass2"];
	$rps_id=$_SESSION['SESS_RPS_ID'];
		
$sql = "update rps set password='$pass2' where rps_id='$rps_id' ";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../index.php");

?>						
