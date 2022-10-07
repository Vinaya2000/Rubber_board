<?php
session_start();
if(!isset($_SESSION['SESS_BRD_ID']) || (trim($_SESSION['SESS_BRD_ID']) == '')) {
	header("location:../");
	exit();
}

?>
