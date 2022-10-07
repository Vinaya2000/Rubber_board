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
                             <form method="post" action="action/incentive_save.php" autocomplete="off">
                             
                              <!-- First Row Start-->
                                <div class="row">         
                                	<div class="col-md-3 col-sm-6 col-xs-12">
                                          <label>Time Period</label>
                                            <input type="text"  name="time_period"  class="form-control" required >
                                    </div>                                                          
                                	<div class="col-md-3 col-sm-6 col-xs-12">
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
                                     <div class="col-md-3 col-sm-6 col-xs-12">
                                          <label>Name</label>
                                            <input type="text"  name="name"  class="form-control" id="name" readonly>
                                    </div>                                                                   						
									<div class="col-md-3 col-sm-1 col-xs-12">
										<label style="float:left">Annual Quantity</label>
										<input type="number"  name="annual_qty"  class="form-control" required min="0" step="0.01">    
									</div>	
                                          
                                    <div class="col-md-3 col-sm-2 col-xs-12">
										<label style="float:left">Dealer License No</label>
										<input type="text"  name="dealer_licence"  class="form-control" required>
									</div>	
                                    
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <label style="float:left">Date OF Bill</label>
                                         <input type="date"  name="date_of_bill"  class="form-control" required max="<?php echo date("Y-m-d");?>">
                                    </div>
                                     <div class="col-md-3 col-sm-6 col-xs-12">
                                        <label style="float:left">Invoice No</label>
                                         <input type="number"  name="invoice_no"  class="form-control" required min="0" step="0.01"> 
                                    </div>
                                    <div class="col-md-3 col-sm-2 col-xs-12">
										<label style="float:left">Subsidy Quantity</label>
										<input type="number"  name="subsidy_qty"  class="form-control" required min="0" step="0.01">    
									</div>                               
                                    <div class="col-md-3 col-sm-2 col-xs-12">
										<label style="float:left">Total Amount</label>
										<input type="number"  name="total_amt"  class="form-control" required min="0" step="0.01">    
									</div>
                                    <div class="col-md-3 col-sm-2 col-xs-12">
										<label style="float:left">Date</label>
										<input type="text"  name="date" value="<?php echo date("Y-m-d"); ?>" class="form-control" readonly>
									</div>		
                                     <div class="col-md-3 col-sm-2 col-xs-12">
										<input type="submit" class="btn btn-block btn-primary" value="Submit" style="margin-top:23px;">
									</div>
                                    <div class="col-md-3 col-sm-2 col-xs-12">
										<input type="reset" class="btn btn-block btn-danger" value="Reset" style="margin-top:23px;">
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
