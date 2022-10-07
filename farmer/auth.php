<?php
session_start();
if(!isset($_SESSION['SESS_FARMER_ID']) || (trim($_SESSION['SESS_FARMER_ID']) == '')) {
	header("location:../");
	exit();
}

?>
