<?php include('../db-connect/db.php'); ?>
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
              <h3 class="box-title">All Farmers</h3>
            </div>
            
            
         	  <div class="box-body no-padding">
				 <div class="box-body">
		  		  <div class="col-xs-12 table_div">
		  		  <table id="example1" class="table table-bordered table-striped table-responsive">
                   <thead>
                    <tr>
                     <th>Beneficiary_Id</th>
                     <th>Name</th>
                     <th>Sex</th>
                     <th>Age</th>
                  	 <th>Address</th>
                     <th>Contact</th>
                     <th>Account_No</th>
                     <th>Adhar_No</th>    
                     <th>Passbook</th>  
                     <th>Aadhar</th>
                     <th>Tax</th>              
                   </tr>
                  </thead>
                <tbody>				
				<?php 
				$result =$db ->prepare("SELECT * FROM farmer ");
				$result->execute();	
				for($i=0; $rows= $result->fetch(); $i++){	
				?>
				<tr>
					<td><?php echo $rows['b_id']; ?></td>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['gendar']; ?></td>
					<td><?php echo $rows['age']; ?></td>
					<td><?php echo $rows['address']; ?></td>
					<td><?php echo $rows['mobile']; ?></td>
					<td><?php echo $rows['acc_no']; ?></td>
					<td><?php echo $rows['adhar_no']; ?></td>
                    <td>
                    	<a href="img/farmer/<?php echo $rows['bank_passbook_copy'];?>" target="_blank">Download</a>
                    </td>
                    <td>
                    	<a href="img/farmer/<?php echo $rows['adhar_copy'];?>" target="_blank">Download</a>
                    </td>
                    <td>
                    	<a href="img/farmer/<?php echo $rows['tax_reciepts'];?>" target="_blank">Download</a>
                    </td>
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
