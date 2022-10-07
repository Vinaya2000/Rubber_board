<?php
include '../db-connect/db.php';

$delete = $_GET[ 'delete' ];

$statement = $db->prepare( "DELETE FROM  bills WHERE id='$delete' ");
$statement->execute();

header('location: bill.php');
?>

