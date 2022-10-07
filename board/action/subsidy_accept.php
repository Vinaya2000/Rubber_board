<?php
include '../../db-connect/db.php';

$id = $_GET[ 'id' ];

$statement = $db->prepare( "update subsidy set bstat='accept' where  id='$id' ");
$statement->execute();

header('location: ../subsidy_search.php');
?>

