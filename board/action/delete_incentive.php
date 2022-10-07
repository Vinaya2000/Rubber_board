<?php
include '../../db-connect/db.php';

$delete = $_GET[ 'delete' ];

$statement = $db->prepare( "DELETE FROM  incentive  WHERE id='$delete'");
$statement->execute();

header('location: ../incentive_search.php');
?>

