<?php
include '../../db-connect/db.php';

$b_id = $_POST[ 'b_id' ];
$name = $_POST[ 'name' ];
$age = $_POST[ 'age'];
$dob = $_POST[ 'dob' ];
$gendar = $_POST['gendar'];
$guardian = $_POST['guardian_name'];
$relation = $_POST['relation_guardian'];
$qualification = $_POST['qualification'];
$mobile_no = $_POST['mobile_no'];
$adhar_no = $_POST['adhar_no'];
$rps_permit_no = $_POST['rps_permit_no'];
$address = $_POST['address'];
$village = $_POST['village'];
$panchayath = $_POST['panchayath'];
$thaluk = $_POST['thaluk'];
$district = $_POST['district'];
$state = $_POST['state'];
$pin_code = $_POST['pin_code'];
$account_no = $_POST['account_no'];
$ifsc_code = $_POST['ifsc'];
$bank = $_POST['bank'];
$branch = $_POST['branch'];
$account_type = $_POST['account_type'];
$year_of_planting = $_POST['year_of_planting'];
$area_hector = $_POST['area_hector_total'];
$area_hector_tapping = $_POST['area_hector_tapping'];
$no_of_trees = $_POST['no_of_trees'];
$username = $_POST['username'];
$password = $_POST['password'];


$targetFile = '../img/farmer/' . basename($_FILES["bank_passbook"]["name"]);
$passbook = basename($_FILES["bank_passbook"]["name"]);
move_uploaded_file($_FILES["bank_passbook"]["tmp_name"], $targetFile);

$targetFile = '../img/farmer/' . basename($_FILES["adhar_copy"]["name"]);
$adhar_copy = basename($_FILES["adhar_copy"]["name"]);
move_uploaded_file($_FILES["adhar_copy"]["tmp_name"], $targetFile);

$targetFile = '../img/farmer/' . basename($_FILES["tax_reciept"]["name"]);
$tax_reciepts = basename($_FILES["tax_reciept"]["name"]);
move_uploaded_file($_FILES["tax_reciept"]["tmp_name"], $targetFile);

//1st
$statement = $db->prepare( "INSERT INTO farmer (b_id, name, age, dob, gendar, guardian_name, relation_guardian, qualification, mobile	, adhar_no, rps_permit_no, address, village, panchayath, thaluk, district, state, pin_code, acc_no, ifsc_code, branch, bank, account_type, year_of_planting, area_hector, area_hector_tappig, no_of_trees, bank_passbook_copy, adhar_copy, tax_reciepts,username, password)
VALUES('$b_id', '$name',  '$age','$dob', '$gendar', '$guardian', '$relation', '$qualification', '$mobile_no', '$adhar_no', '$rps_permit_no', '$address', '$village', '$panchayath', '$thaluk', '$district', '$state', '$pin_code', '$account_no', '$ifsc_code', '$branch', '$bank', '$account_type', '$year_of_planting', '$area_hector', '$area_hector_tapping', '$no_of_trees', '$passbook', '$adhar_copy', '$tax_reciepts', '$username', '$password')");
$statement->execute();

//2nd
$statement = $db->prepare( "INSERT INTO users (user_name, password)
VALUES('$username','$password')" );
$statement->execute();

header('location: ../farmer.php');
?>

