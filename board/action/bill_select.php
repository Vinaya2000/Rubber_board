<?php
require("../auth.php");
include('../../db-connect/db.php');
							
	$b_id=$_POST["b_id"];	
	$result = $db->prepare("SELECT * FROM farmer where b_id='$b_id'");
	$result->execute();
		for($i=0; $rows = $result->fetch(); $i++)
		{
			$data["name"] = $rows["name"];			
		}
		echo json_encode($data);
?>


                  								
                  							