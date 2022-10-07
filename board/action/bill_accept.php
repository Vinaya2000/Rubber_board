<?php
include '../../db-connect/db.php';

$id = $_GET[ 'id' ];

$statement = $db->prepare( "update bills set bstat='accept' where  id='$id' ");
$statement->execute();

header('location: ../bill_search.php');
?>

