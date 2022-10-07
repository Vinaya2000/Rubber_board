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
        <div class="col-md-12 col-sm-6 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Transfer Report</h3>
                </div>
                
                <div class="box-body no-padding">
				 <div class="box-body">
					<form method="post" action="report_transfer_view.php" autocomplete="off">
                       <div class="col-md-3 col-sm-6 col-xs-12">
                            <label>Beneficiary ID</label>
                                <input list="bencid" placeholder="Search" required class="form-control" name="b_id">
                                    <datalist id="bencid">
                                        <option value="">Select</option>       
                                        <?php
                                            $result = $db->prepare("SELECT distinct(b_id) FROM amount_transfer");
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
                           	<label>From Date</label>
                          	<input type="date" name="fdate" class="form-control" required max="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">                           
                           	<label>To Date</label>
                            <input type="date" name="tdate" class="form-control" required max="<?php echo date("Y-m-d");?>">
                        </div>                    
                         <div class="col-md-2 col-sm-6 col-xs-12">                           
                           	<label>&nbsp;</label>
                            <input type="submit" value="Search" class="btn btn-block btn-primary">
                        </div>

                        
                </form>		  		
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
	</div>
</body>
</html>
