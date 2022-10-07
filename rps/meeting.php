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
							Meeting
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="action/meeting_save.php" class="forms" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">	                                		
                                      <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input list="product" placeholder="Search" required class="form-control" name="name">
                                            <datalist id="product">
                                                <option value="">Select</option>  
                                                <option>Farmers</option>                                                   						
                                            </datalist>
                                          </div>
                                            
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Conduct Person Name</label>
                                           <input type="text"  name="contact_person" class="form-control" required>
                                          </div>
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Place</label>
                                           <input type="text"  name="place"  class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
                                          </div>
                                      
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                          <label>Subject</label>
                                          <textarea  name="subject" rows="1"   class="form-control" required></textarea>
                                          </div>
                                        
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Date</label>
                                           <input type="date"  name="date"  class="form-control" required min="<?php echo date("Y-m-d");?>">
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Time</label>
                                           <input type="time"  name="time"  class="form-control" required>
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
