<?php 
include '../db-connect/db.php';
$edit = $_GET['edit'];
$result =$db ->prepare("SELECT * FROM incentive WHERE id='$edit'");
$result->execute();	
$rows= $result->fetch(); 
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
                             <form method="post" action="action/incentive_edit.php" autocomplete="off">
                             
                              <!-- First Row Start-->
                                <div class="row">         
                                	<div class="col-md-3 col-sm-6 col-xs-12">
                                          <label>Time Period</label>
                                            <input type="text"  name="time_period" value="<?php echo $rows['time_period']; ?>"  class="form-control" readonly>
                                            <input type="hidden"  name="edit" value="<?php echo $edit; ?>" class="form-control">
                                    </div>                                                          
                                	<div class="col-md-3 col-sm-6 col-xs-12">
                                    <label>Beneficiary ID</label>
                     					<input list="product" placeholder="Search" value="<?php echo $rows['b_id']; ?>" class="form-control" name="b_id" id="productselect" readonly>                                         
                                     </div> 
                                     <div class="col-md-3 col-sm-6 col-xs-12">
                                          <label>Name</label>
                                            <input type="text"  name="name" value="<?php echo $rows['name']; ?>"  class="form-control" id="producttyp" readonly >
                                    </div>                                                                   						
									<div class="col-md-3 col-sm-1 col-xs-12">
										<label style="float:left">Annual Quantity</label>
										<input type="number"  name="annual_qty" value="<?php echo $rows['annual_qty']; ?>"  class="form-control">
									</div>	
                                          
                                    <div class="col-md-3 col-sm-2 col-xs-12">
										<label style="float:left">Dealer License No</label>
										<input type="text"  name="dealer_licence" value="<?php echo $rows['dealer_licence']; ?>" class="form-control">
									</div>	
                                    
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <label style="float:left">Date OF Bill</label>
                                         <input type="date"  name="date_of_bill" value="<?php echo $rows['date_of_bill']; ?>" class="form-control">
                                    </div>
                                     <div class="col-md-3 col-sm-6 col-xs-12">
                                        <label style="float:left">Invoice No</label>
                                         <input type="number"  name="invoice_no" value="<?php echo $rows['invoice_no']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-3 col-sm-2 col-xs-12">
										<label style="float:left">Subsidy Quantity</label>
										<input type="number"  name="subsidy_qty" value="<?php echo $rows['subsidy_qty']; ?>" class="form-control">
									</div>                               
                                    <div class="col-md-3 col-sm-2 col-xs-12">
										<label style="float:left">Total Amount</label>
										<input type="number"  name="total_amt" value="<?php echo $rows['total_amt']; ?>" class="form-control">
									</div>
                                    <div class="col-md-3 col-sm-2 col-xs-12">
										<label style="float:left">Date</label>
										<input type="date"  name="date" value="<?php echo  $rows['dat']; ?>" class="form-control">
									</div>		
                                     <div class="col-md-3 col-sm-2 col-xs-12">
										<input type="submit" class="btn btn-block btn-success" value="Update" style="margin-top:23px;">
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
      </div>
    </section>  
<?php
	include("include/footer.php");
?>
<div class="control-sidebar-bg"></div>
</div>
<?php
  include("include/js.php");
?>
</body>
</html>
