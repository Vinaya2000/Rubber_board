<?php
include '../../db-connect/db.php';

$edit = $_POST[ 'edit' ];
$name = $_POST[ 'name' ];
$contact_person = $_POST[ 'contact_person' ];
$subject = $_POST[ 'subject' ];
$place = $_POST[ 'place' ];
$date = $_POST[ 'date'];
$time = $_POST[ 'time'];


$statement = $db->prepare( "UPDATE meeting SET name='$name', contact_person='$contact_person', place='$place', subject='$subject', dat='$date', tim='$time' WHERE id = '$edit'");
$statement->execute();

header('location: ../meeting_view.php');
?>

