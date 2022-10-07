<?php
include '../../db-connect/db.php';

$b_id = $_POST[ 'b_id' ];
$name = $_POST[ 'name' ];
$year = $_POST[ 'year'];
$date_period = $_POST[ 'date_period' ];
$bill_date = $_POST['bill_date'];
$bill_no = $_POST['bill_no'];
$solid_qty = $_POST['solid_qty'];
$d_licence_no = $_POST['d_licence_no'];
$amount = $_POST['amount'];
$date = $_POST['date'];

$targetFile = '../img/farmer/' . basename($_FILES["bcopy"]["name"]);
$bcopy = basename($_FILES["bcopy"]["name"]);
move_uploaded_file($_FILES["bcopy"]["tmp_name"], $targetFile);


$lstat="pending";

$bstat="pending";

$statement = $db->prepare( "INSERT INTO subsidy (b_id, name, years, date_period, bill_date, bill_no, solid_qty, dealer_licence, amount, dat,lstat,bstat,bcopy)
VALUES('$b_id', '$name',  '$year','$date_period', '$bill_date', '$bill_no', '$solid_qty', '$d_licence_no', '$amount', '$date','$lstat','$bstat','$bcopy')");
$statement->execute();

header('location: ../subsidy.php');
?>

