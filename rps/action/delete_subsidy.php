<?php
include '../../db-connect/db.php';

$delete = $_GET[ 'delete' ];

$statement = $db->prepare( "DELETE FROM  subsidy WHERE id='$delete' ");
$statement->execute();

header('location: ../subsidy.php');
?>

