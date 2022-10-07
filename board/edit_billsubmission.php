<?php include '../db-connect/db.php';

$edit = $_GET['edit'];
$result =$db ->prepare("SELECT * FROM bill_submission WHERE id='$edit' ");
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
                            <form method="post" action="action/edit_billsubmission.php" class="forms" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                           <label>Beneficiary ID</label>
                                           <input list="product" placeholder="Search" value="<?php echo $rows['name']; ?>" class="form-control" name="name" id="productselect" readonly>
                                           <input type="hidden" placeholder="Search" value="<?php echo $edit; ?>" class="form-control" name="edit" id="productselect">
                                            <datalist id="product">
                                                <option value="">Select</option>                                                        						
                                            </datalist>
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                          <label>Subject</label>
                                          <textarea  name="subject" rows="1"   class="form-control"><?php echo $rows['subject']; ?></textarea>
                                          </div>                                                                                   
                                      
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label> Last Date</label>
                                           <input type="date"  name="last_date" value="<?php echo $rows['last_date']; ?>"  class="form-control" >
                                          </div>                                                                                   				
                                    </div>
                                    <br>
                                     <div class="col-md-3 col-sm-6 col-xs-12 pull-right">
                                     <input type="submit" value="Update" class="btn btn-block btn-primary">
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
