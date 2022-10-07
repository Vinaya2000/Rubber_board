<?php
include '../../db-connect/db.php';

$time_period = $_POST[ 'time_period' ];
$b_id = $_POST[ 'b_id' ];
$name = $_POST[ 'name' ];
$annual_qty = $_POST[ 'annual_qty'];
$date_period = $_POST[ 'date_period' ];
$delaer_licence = $_POST['dealer_licence'];
$date_of_bill = $_POST['date_of_bill'];
$invoice_no = $_POST['invoice_no'];
$subsidy_qty = $_POST['subsidy_qty'];
$total_amt = $_POST['total_amt'];
$date = $_POST['date'];


$statement = $db->prepare( "INSERT INTO incentive (time_period, b_id, name, annual_qty, dealer_licence, date_of_bill, invoice_no, subsidy_qty, total_amt, dat)
VALUES('$time_period', '$b_id',  '$name','$annual_qty', '$delaer_licence', '$date_of_bill', '$invoice_no', '$subsidy_qty', '$total_amt', '$date')");
$statement->execute();

header('location: ../incentive_search.php');
?>

