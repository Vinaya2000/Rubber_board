<?php
include '../../db-connect/db.php';

$edit = $_POST[ 'edit' ];
$time_period = $_POST[ 'time_period' ];
$b_id = $_POST[ 'b_id' ];
$name = $_POST[ 'name' ];
$annual_qty = $_POST[ 'annual_qty'];

$delaer_licence = $_POST['dealer_licence'];
$date_of_bill = $_POST['date_of_bill'];
$invoice_no = $_POST['invoice_no'];
$subsidy_qty = $_POST['subsidy_qty'];
$total_amt = $_POST['total_amt'];
$date = $_POST['date'];


$statement = $db->prepare( "UPDATE incentive SET time_period='$time_period', name='$name', annual_qty='$annual_qty', dealer_licence='$delaer_licence', date_of_bill='$date_of_bill', invoice_no='$invoice_no', subsidy_qty='$subsidy_qty', total_amt='$total_amt', dat='$date' WHERE id='$edit'");
$statement->execute();

header('location: ../incentive_search.php');
?>

