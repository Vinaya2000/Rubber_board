<?php
require("../auth.php");
include('../../db-connect/db.php');
							
	$b_id=$_POST["b_id"];	
	$result = $db->prepare("SELECT * FROM farmer where b_id='$b_id'");
	$result->execute();
		for($i=0; $rows = $result->fetch(); $i++)
		{
			$data["name"] = $rows["name"];	
			$data["bank"] = $rows["bank"];
			$data["accno"] = $rows["acc_no"];
			$data["ifcode"] = $rows["ifsc_code"];
			$data["branch"] = $rows["branch"];
		}
		echo json_encode($data);
?>


                  								
                  							