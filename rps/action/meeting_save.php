<?php
include '../../db-connect/db.php';

$name = $_POST[ 'name' ];
$contact_person = $_POST[ 'contact_person' ];
$subject = $_POST[ 'subject' ];
$place = $_POST[ 'place' ];
$date = $_POST[ 'date'];
$time = $_POST[ 'time'];


$statement = $db->prepare( "INSERT INTO meeting (name,contact_person, place, subject, dat, tim)
VALUES('$name', '$contact_person', '$place', '$subject', '$date', '$time')");
$statement->execute();

header('location: ../meeting_farmers.php');
?>

