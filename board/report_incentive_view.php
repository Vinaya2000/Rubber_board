<?php
  require("auth.php");
  include('../db-connect/db.php');	
  $b_id=$_POST["b_id"];
  $fdate=$_POST["fdate"];
  $tdate=$_POST["tdate"];
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
		input[type="number"]::-webkit-outer-spin-button, input[type="number"]::-webkit-inner-spin-button{-webkit-appearance: none;margin: 0;}
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
  
    <section class="content-header">
      <h1>
      	R B M S
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    
     <!-- Main content -->
     <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
          	
            <i class="fa fa-globe"></i> R B M S
            <small class="pull-right"><?php echo"<b>Date : ".date("d-m-Y")."</b>";?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-sm-3 invoice-col">
          <b>Incentive Report </b><br>
        </div>       
         <div class="col-sm-4 invoice-col">
          <b> Beneficiary_Id :  <?php echo $b_id; ?> </b><br>
        </div>
         <div class="col-sm-2 invoice-col">
          <b>From :  <?php echo date("d-m-Y",strtotime($fdate)); ?> </b><br>
        </div>
         <div class="col-sm-2 invoice-col">
          <b>To  :   <?php echo date("d-m-Y",strtotime($tdate));?></b><br>
        </div>             
        <hr>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
        	
        
          <table class="table table-striped">
            <thead>
            <tr>
                <th>Date</th>    
                <th>Name</th>                                                   
                <th>Annual Quantity</th>
                <th>Dealer License No</th>
                <th>Date Of Bill</th>
                <th>Invoice No</th>
                <th>Total Quantity</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            <?php
				$tot=0;
				$result = $db->prepare("select * from  incentive where  b_id= '$b_id' and dat >= '$fdate' AND dat <= '$tdate' order by dat asc");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++)
					{				
						 echo"<td>".$row["dat"]."</td>";
						 echo"<td>".$row["name"]."</td>";
						 echo"<td>".$row["annual_qty"]."</td>";
						 echo"<td>".$row["dealer_licence"]."</td>";
						 echo"<td>".$row["date_of_bill"]."</td>";
						 echo"<td>".$row["invoice_no"]."</td>";
						 echo"<td>".$row["subsidy_qty"]."</td>";	
						 echo"<td>".$row["total_amt"]."</td>";
						 $tot=$tot+$row["total_amt"];						
						 echo"</tr>";
				  }
			?>
            </tbody>
          </table>
          
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
      <hr>
        <!-- accepted payments column -->
        <div class="col-xs-7">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <th>                	
                	Grand Total
                </th>
                <td>
                    <?php echo "<b style='color:red; font-size:15px;'>".$tot."</b>";?>
                </td>
              </tr>            
            </table>
          </div>
        </div>
        <hr>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px; width:180px;" onClick="window.print() ">
            <i class="fa fa-print"></i> Print
          </button>
          
          <a type="button" class="btn btn-danger pull-right" style="margin-right: 5px; width:180px;" href="report_incentive.php">
            <i class="fa fa-backward"></i> Back
          </a>
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>
	<?php
		include("include/js.php");
	?>  
    </div>
</body>
</html>
  