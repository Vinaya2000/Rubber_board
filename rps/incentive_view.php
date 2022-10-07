<?php
require("auth.php");
include('../db-connect/db.php');
$rps_id=$_SESSION['SESS_RPS_ID'];
$result = $db->prepare("select * from  rps where rps_id = '$rps_id'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++)
	{						
		$name=$row["username"];
	}
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="text/css" sizes="16x16" href="../images/logo.png">
	<title>R B M S</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<?php
	include("include/css.php");
	?>    
     <style>
		td{text-transform:uppercase;}
	</style>
    <link rel="stylesheet" href="../css/custom_style.css" />
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
	
    <header class="main-header">
	<?php
	include("include/header.php");
	?>
	</header>
    
	<aside class="main-sidebar">
	<?php
	include("include/leftmenu.php");
	?>
	</aside>
    
	<div class="content-wrapper">
	<?php
	include("include/topmenu.php");
	?>
	</div>
    
      <div class="row">
        <div class="col-md-12">
        
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">All Incentive</h3>
            </div>
            
            
         	  <div class="box-body no-padding">
				 <div class="box-body">
		  		  <div class="col-xs-12 table_div">
		  		  <table id="example1" class="table table-bordered table-striped table-responsive">
                   <thead>
                   <tr>
                   		<th>Time_Period</th>
                        <th>Beneficiary_Id</th>
                        <th>Name</th>                                                   
                        <th>Annual_Quantity</th>
                        <th>Dealer_License_No</th>
                        <th>Date_Of_Bill</th>
                        <th>Invoice_No</th>
                        <th>Total_Quantity</th>
                        <th>Amount</th>
                        <th>Date</th>                       
                    </tr>
                  </thead>
                <tbody>				
					<?php 
				$result =$db ->prepare("SELECT * FROM incentive ");
				$result->execute();	
				for($i=0; $rows= $result->fetch(); $i++){	?>                                                    <tr>
					 <td><?php echo $rows['time_period'] ?></td>
					 <td><?php echo $rows['b_id'] ?></td>
					 <td><?php echo $rows['name'] ?></td>
					 <td><?php echo $rows['annual_qty'] ?></td>
					 <td><?php echo $rows['dealer_licence'] ?></td>
					 <td><?php echo $rows['date_of_bill'] ?></td>
					 <td><?php echo $rows['invoice_no'] ?></td>
					 <td><?php echo $rows['subsidy_qty'] ?></td>
					 <td><?php echo $rows['total_amt'] ?></td>
					 <td><?php echo $rows['dat'] ?></td>
					 <!--<td>
						<div class="btn-group">
						<a href="edit_incentive.php?edit=<?php echo $rows['id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
						<a href="action/delete_incentive.php?delete=<?php echo $rows['id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
						</div>
					</td>-->
					</tr> 
					<?php } ?>      
				</tbody>
              </table>
              </div>
              	<a href="index.php" style="float:right" class="btn btn-facebook btn-primary m_t_1">Back</a>
            </div>
		 </div>
		
        </div>
        
        
       
         
           
		</div>
</section>           
</div>
  
 <?php
  include("include/footer.php");
	?>
		<div class="control-sidebar-bg"></div>
		</div>
        
<?php
  include("include/js.php");
?>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>
