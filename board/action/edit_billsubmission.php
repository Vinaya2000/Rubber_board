<?php
include '../../db-connect/db.php';
include '../../datetime_creation/datetime_creation.php';

$edit = $_POST[ 'edit' ];
$name = $_POST[ 'name' ];
$subject = $_POST[ 'subject' ];
$last_date = $_POST[ 'last_date'];


$statement = $db->prepare( "UPDATE  bill_submission SET name='$name', subject='$subject', last_date='$last_date' WHERE id='$edit'");
$statement->execute();

header('location: ../bill_submission_view.php');
?>

