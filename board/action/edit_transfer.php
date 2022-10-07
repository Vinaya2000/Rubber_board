<?php
include '../../db-connect/db.php';
include '../../datetime_creation/datetime_creation.php';

$edit = $_POST[ 'edit' ];
$farmer_name = $_POST[ 'name' ];
$subject = $_POST[ 'subject' ];
$bank_name = $_POST[ 'bank_name' ];
$amount = $_POST[ 'amount'];
$date = $_POST['date'];

$statement = $db->prepare("UPDATE  amount_transfer SET name='$farmer_name', subject='$subject', bank_name='$bank_name', amount='$amount', dat='$date' WHERE id='$edit'");
$statement->execute();

header('location: ../amount_transfer_view.php');
?>

