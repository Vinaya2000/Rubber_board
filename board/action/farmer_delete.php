<?php
include '../../db-connect/db.php';

$delete = $_GET[ 'delete' ];

$statement = $db->prepare( "DELETE FROM  farmer WHERE id='$delete' ");
$statement->execute();

header('location: ../farmer_cancel.php');
?>

