<?php
require("auth.php");
include('../db-connect/db.php');
$id=$_SESSION['SESS_FARMER_ID'];
$result = $db->prepare("select * from  farmer where id = '$id'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++)
	{						
		$b_id=$row["b_id"];
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
              <h3 class="box-title">Meeting Farmers</h3>
            </div>
            
            
         	  <div class="box-body no-padding">
				 <div class="box-body">
		  		  <div class="col-xs-12 table_div">
		  		  <table id="example1" class="table table-bordered table-striped table-responsive">
                   <thead>
                   <tr>
                        <th>Conduct Person</th>
                        <th>Place</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                  </thead>
                <tbody>				
				<?php 
				$result =$db ->prepare("SELECT * FROM meeting where name='farmers' ");
				$result->execute();	
				for($i=0; $rows= $result->fetch(); $i++){	?>
				<tr>
					<td><?php echo $rows['contact_person'] ?></td>
					<td><?php echo $rows['place'] ?></td>
					<td><?php echo $rows['subject'] ?></td>
					<td><?php echo $rows['dat'] ?></td>
					<td><?php echo $rows['tim'] ?></td>
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
