<?php
include '../../db-connect/db.php';

$name = $_POST[ 'name' ];
$subject = $_POST[ 'subject' ];
$last_date = $_POST[ 'last_date'];

$statement = $db->prepare("insert into bill_submission(name, subject, last_date)values('$name','$subject','$last_date')");
$statement->execute();
header('location: ../bill_submission_view.php');
?>

