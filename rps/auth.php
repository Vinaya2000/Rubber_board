<?php
session_start();
if(!isset($_SESSION['SESS_RPS_ID']) || (trim($_SESSION['SESS_RPS_ID']) == '')) {
	header("location:../");
	exit();
}

?>
