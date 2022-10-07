<?php
include '../../db-connect/db.php';

	$b_id = $_POST[ 'b_id' ];
	$name = $_POST[ 'name' ];
	$bank = $_POST[ 'bank' ];
	$accno = $_POST[ 'accno' ];
	$ifcode = $_POST[ 'ifcode' ];
	$branch = $_POST[ 'branch' ];
	$amount = $_POST[ 'amount' ];
	$date = $_POST[ 'date' ];
 
$statement = $db->prepare( "INSERT INTO amount_transfer (b_id, name, bank, accno, ifcode, branch, amount, date)
VALUES('$b_id','$name','$bank','$accno','$ifcode','$branch','$amount','$date')");
$statement->execute();

header('location: ../amount_transfer_view.php');
?>

