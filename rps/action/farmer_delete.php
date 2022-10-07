<?php
include '../../db-connect/db.php';
include '../../datetime_creation/datetime_creation.php';

$delete = $_GET[ 'delete' ];

$statement = $db->prepare( "DELETE FROM  farmer WHERE id='$delete' ");
$statement->execute();

header('location: ../farmer.php');
?>

