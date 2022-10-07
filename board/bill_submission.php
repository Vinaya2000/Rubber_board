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
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-danger">
                <div class="box-body no-padding">
                	<div class="panel panel-primary">
  					  <div class="panel-heading ">
							Bill Submission Notification
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="action/bill_submission.php" class="forms" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                     <div class="col-md-6 col-sm-12 col-xs-12">
                                      <label>Beneficiary ID</label>
                     					<input list="bencid" placeholder="Search" required class="form-control" name="name">
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
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label> Last Date</label>
                                           <input type="date"  name="last_date"  class="form-control" required min="<?php echo date("Y-m-d");?>">
                                          </div>   
                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                          <label>Subject</label>
                                          <textarea  name="subject" rows="5" required class="form-control"></textarea>
                                          </div>                                                                                   
                                    </div>
                                    <br>                                   
                                     <div class="col-md-3 col-sm-6 col-xs-12 pull-right">
                                     <input type="submit" value="Submit" class="btn btn-block btn-primary">
                                     </div>
                                      <div class="col-md-3 col-sm-6 col-xs-12 pull-right">
                                		 <input type="reset" value="Reset" class="btn btn-block btn-danger">
                            	 	</div>
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
</body>
</html>
