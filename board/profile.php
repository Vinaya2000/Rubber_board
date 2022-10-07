<?php
require("auth.php");
include('../db-connect/db.php');
$brd_id=$_SESSION['SESS_BRD_ID'];
$result = $db->prepare("select * from  board where brd_id = '$brd_id'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++)
	{						
		$name=$row["username"];
		$password=$row["password"];
	}
?>
<!DOCTYPE html>
<html>

<head>

 	 <title>Bestcare</title>
    <link rel="icon" type="text/css" sizes="16x16" href="../images/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
    <?php
		include('include/css.php');
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
        <div class="">
          <div class="">
            <div class="col-xs-12">
            
              <div class="box box-danger">            
                <div class="box-body no-padding">
                	<div class="panel panel-primary">
  							<div class="panel-heading">
                            Change Password
                            </div>
							<div class="panel-body">                            
                            
                        <div class="col-md-6 col-sm-12 col-xs-12 well">
                     		 <form method="post" action="action/profile_update.php" class="forms" autocomplete="off">
                              <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
  									<strong>Password Change </strong>
							  </div>
                              <div class="col-md-6 col-sm-12 col-xs-12">
                              	<label>Old Password</label>
								<input type="password"  name="pass1"  class="form-control" value="<?php echo $password;?>" readonly>
                              </div>
                              <div class="col-md-6 col-sm-12 col-xs-12">
                              	<label>New Password</label>
								<input type="password"  name="pass2" required class="form-control" >
                              </div>
                               <div class="col-md-6 col-sm-12 col-xs-12" style="float:right">
                            	<br>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="reset" value="Reset" class="btn btn-block btn-danger">
                            	 </div>
                                 
                                 
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="submit" value="Submit" class="btn btn-block btn-primary">
                            	 </div>
                                 
                            
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
        
		<?php
  			include("include/js.php");
		?>        
	</div>

</body>
</html>
