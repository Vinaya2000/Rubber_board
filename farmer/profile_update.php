<?php
include '../db-connect/db.php';

$id = $_POST[ 'id' ];
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

//1st
$statement = $db->prepare( "UPDATE farmer SET  name='$name', age='$age', dob='$dob', gendar='$gendar', guardian_name='$guardian', relation_guardian='$relation', qualification='$qualification', mobile='$mobile_no', adhar_no='$adhar_no', rps_permit_no='$rps_permit_no', address='$address', village='$village', panchayath='$panchayath', thaluk='$thaluk', district='$district', state='$state', pin_code='$pin_code', acc_no='$account_no', ifsc_code='$ifsc_code', branch='$branch', bank='$bank', account_type='$account_type', year_of_planting='$year_of_planting', area_hector='$area_hector', area_hector_tappig='$area_hector_tapping', no_of_trees='$no_of_trees',username='$username', password='$password' WHERE id='$id'");
$statement->execute();

header('location:index.php');
?>

