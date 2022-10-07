<?php
require("auth.php");
include('../db-connect/db.php');
$brd_id=$_SESSION['SESS_BRD_ID'];
$result = $db->prepare("select * from  board where brd_id = '$brd_id'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++)
	{						
		$name=$row["username"];
	}
?>
<!DOCTYPE html>
<html>

<head>
	<title>R B M S</title>
    <link rel="icon" type="text/css" sizes="16x16" href="../images/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<?php
	include("include/css.php");
	?>
      <style>
		#resultTable{border-collapse: separate;background-color: #FFFFFF;border-spacing: 0;max-width: 100%;}
		#resultTable {color: #212121;width:100%;margin-top:1em;}
		#resultTable thead tr th {background: none repeat scroll 0 0 #EEEEEE;color:#212121;padding:10px 14px;text-align:left;font-size:1em;}
		#resultTable tbody tr td{font:bold 13px 'Arial';text-align:left;padding:10px 14px;}
		#resultTable td{padding:7px;}
		#resultTable tr{background:#fff;}
		#resultTable tr:hover {background-color:rgba(0,0,0,.05);}
	</style>
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
	 <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-danger">
                <div class="box-body no-padding">
                	<div class="panel panel-primary">
  					  <div class="panel-heading ">
							Farmers Bill
                        </div>
						<div class="panel-body"> 
                        
                             <div class="col-md-12 col-sm-12 col-xs-12 well">
                             <form method="post" action="action/bill_save.php" autocomplete="off" enctype="multipart/form-data">
                             
                              <!-- First Row Start-->
                                <div class="row">                                                                 
                                	<div class="col-md-2 col-sm-6 col-xs-12">
                                    <label>Beneficiary ID</label>
                     					<input list="bencid" placeholder="Search" required class="form-control" name="b_id" id="b_id">
                                            <datalist id="bencid">
                                                <option value="">Select</option>       
												<?php
                                                    $result = $db->prepare("SELECT b_id FROM farmer");
                                                    $result->execute();
                                                    $row_count =  $result->rowcount();
                                                    for($i=0; $rows = $result->fetch(); $i++)
                                                    {
                                                    echo '<option>'.$rows['b_id'].'</option>';
                                                    }
                                                ?>		                                              						
                                            </datalist>
                                     </div> 
                                     <div class="col-md-2 col-sm-6 col-xs-12">
                                          <label>Name</label>
                                            <input type="text"  name="name"  class="form-control" id="name" readonly>
                                    </div>                                                                   						
									<div class="col-md-2 col-sm-1 col-xs-12">
										<label style="float:left">Year</label>
										<input type="date"  name="year"  class="form-control" required pattern="[0-9]{4,4}" maxlength="4" minlength="4">
									</div>	
                                          
                                    <div class="col-md-2 col-sm-2 col-xs-12">
										<label style="float:left">Date Period</label>
										<input type="text"  name="date_period"  class="form-control" required>
									</div>	
                                    
                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                        <label style="float:left">Bill Date</label>
                                         <input type="date"  name="bill_date"  class="form-control" required max="<?php echo date("Y-m-d");?>">
                                    </div>
                                     <div class="col-md-2 col-sm-6 col-xs-12">
                                        <label style="float:left">Bill No</label>
                                         <input type="text"  name="bill_no"  class="form-control" required>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
										<label style="float:left">Solid Quantity</label>
										<input type="number"  name="solid_qty"  class="form-control" required min="0" step="0.01">     
									</div>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
										<label style="float:left">Dealer License No</label>
										<input type="text"  name="d_licence_no"  class="form-control" required>
									</div>	
                                    <div class="col-md-2 col-sm-2 col-xs-12">
										<label style="float:left">Amount</label>
										<input type="number"  name="amount"  class="form-control" required min="0" step="0.01">
									</div>
                                      <div class="col-md-2 col-sm-2 col-xs-12">
										<label style="float:left">Bill Copy</label>
										<input type="file"  name="bcopy"  class="form-control" required>
									</div>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
										<label style="float:left">Date</label>
									<input type="text"  name="date" value="<?php echo date("Y-m-d"); ?>" class="form-control" readonly>
									</div>		
                                     <div class="col-md-2 col-sm-2 col-xs-12">
										<input type="submit" class="btn btn-block btn-success" value="Add" style="margin-top:23px;">
									</div>                                  
                                    </form>
                                  
                                   <form method="post" action="data_save/bill_save.php" autocomplete="off" class="forms">
                                    <div class="col-md-12 col-sm-12 col-xs-12 table-responsive" style="height: 50vh;overflow-y: scroll; overflow-x: auto;">
                                    <br>
                                     	<table id="resultTable" data-responsive="table"  class="table table-bordered">
                                        	<thead>
                                        		<tr>
                                                
                                                    <th>Beneficiary_Id</th>
                                                    <th>Name</th>                                                   
                                                    <th>Year</th>
                                                    <th>Date_Period</th>
                                                    <th>Bill_Date</th>
                                                    <th>Bill_No</th>
                                                    <th>Solid_Quantity</th>
                                                    <th>Delear_License_No</th>
                                                    <th>Amount</th>
                                                    <th>Bill_Copy</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                            	</tr>
                                                 </thead>     
                                                <tbody> 
                                                <?php 
												$result =$db ->prepare("SELECT * FROM bills where lstat='pending'");
												$result->execute();	
												for($i=0; $rows= $result->fetch(); $i++){	?>
                                               	    <tr>
                                                	<td><?php echo $rows['b_id'] ?></td>
                                                	<td><?php echo $rows['name'] ?></td>
                                                	<td><?php echo $rows['years'] ?></td>
                                                	<td><?php echo $rows['date_period'] ?></td>
                                                	<td><?php echo $rows['bill_date'] ?></td>
                                                	<td><?php echo $rows['bill_no'] ?></td>
                                                	<td><?php echo $rows['solid_qty'] ?></td>
                                                	<td><?php echo $rows['dealer_licence'] ?></td>
                                                	<td><?php echo $rows['amount'] ?></td>
                                                    <td>
                                                    	<a href="../rps/img/farmer/<?php echo $rows['bcopy'];?>" target="_blank">Download</a>
                                                    </td>
                                                	<td><?php echo $rows['dat'] ?></td>
                                                	<td>
                                                		<div class="btn-group">														
														<a href="action/delete_bill.php?delete=<?php echo $rows['id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
														</div>
                                                	</td>
                                                	</tr>
													<?php } ?>
                                            	</tbody>                                              
                                        </table>
									</div>	      
                                 </div>
                                 <!-- First Row End-->                                   
                        	</div>                                                           
                            
							</form>
                       
                           
                        
                            
                            
                           
                        </div>
					</div>
                  </div>				
              </div>
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
<script type="text/javascript">
$(document).ready(function()
{
	$('#b_id').change(function()
	{
		var b_id = $("#b_id").val();
		$.ajax({				
			type:'POST',
			url:'action/bill_select.php',
			data:'b_id='+b_id,	
			dataType:"JSON",			
			success:function(data)
			{
			   $('#name').val(data.name);   
			}				
		}); 						
	});			
});
</script>
</body>
</html>
