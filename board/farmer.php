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
							Add New Farmer
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="action/farmer_save.php" enctype="multipart/form-data" class="forms" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Farmer Information</strong>
                                        </div>
                                    
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Beneficiary Id</label>
                                               <input type="text"  name="b_id" class="form-control" value="<?php echo"RB001".rand(98736,0);?>" readonly>
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="name"   class="form-control" required pattern="[a-zA-Z1 _]{3,50}"><br/>
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Age</label>
                                           <input type="number"  name="age"   class="form-control" required min="18" max="100"> 
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Date Of Birth</label>
                                           <input type="date"  name="dob"   class="form-control" required max="<?php echo date("2002-01-01")?>">  
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Sex</label>
                                            <select class="form-control"  name="gendar"  required>
                                                    <option value="">Select</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                             </select>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Guardian Name</label>
                                          	<input type="text"  name="guardian_name"   class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Relation With Guardian</label>
                                           <input type="text"  name="relation_guardian"  class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                          <label>Qualification</label>
                                         	<input type="text"  name="qualification"  class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Mobile No</label>
                                            <input type="text"  name="mobile_no"  class="form-control"  required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                                          </div> 
                                           <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Aadhar No</label>
                                            <input type="text"  name="adhar_no"  class="form-control"  required maxlength="12" minlength="12">
                                          </div> 
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>R P S Permit No</label>
                                            <input type="text"  name="rps_permit_no"  class="form-control" required>
                                          </div>                                           
                                          <div class="col-md-6 col-sm-6 col-xs-6">
                                           <label>Address</label>
                                          <textarea  name="address" rows="1" class="form-control" required></textarea>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Village</label>
                                            <input type="text"  name="village"  class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
                                          </div>                                         
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Panchayath</label>
                                            <input type="text"  name="panchayath"  class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Thaluk</label>
                                            <input type="text"  name="thaluk"  class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>District</label>
                                            <select class="form-control"  name="district"  required>
                                                    <option value="">Select</option>
                                                    <option>Palakkad</option>
                                                    <option>Thrissur</option>
                                                    <option>Malappuram</option>
                                             </select>
                                          </div>
	                                                                                       				
                                    </div>
                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>Personal Information</strong>
                                    </div>                                                                                                                
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>State</label>
                                        <select name="state" class="form-control" required>
                                            <option value="">Select</option>
                                            <option>Kerala</option>
                                            <option>Tamilnadu</option>
                                            <option>Andhra</option>                                                
                                        </select>
                                    </div> 
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Pin Code</label>
                                       <input type="text"  name="pin_code"  class="form-control" required maxlength="6" minlength="6">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Account No</label>
                                       <input type="text"  name="account_no"  class="form-control" required>
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>IFSC Code</label>
                                       <input type="text"  name="ifsc"  class="form-control" required>
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Branch</label>
                                       <input type="text"  name="branch"  class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Bank</label>
                                       <input type="text"  name="bank"  class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Account Type(Single/Joint)</label>
                                       <input type="text"  name="account_type"  class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Year Of Planting</label>
                                       <input type="number"  name="year_of_planting"  class="form-control" required min="0" step="0.01">       
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Area(Hectare) Total</label>
                                       <input type="number"  name="area_hector_total"  class="form-control" required min="0" step="0.01">       
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Area(Hectare) Tapping</label>
                                       <input type="number"  name="area_hector_tapping"  class="form-control" required min="0" step="0.01">       
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>No Of Trees</label>
                                       <input type="number"  name="no_of_trees"  class="form-control" required min="0" step="0.01">       
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Bank Passbook Copy</label>
                                       <input type="file"  name="bank_passbook"  class="form-control" required>
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Adhar Copy</label>
                                       <input type="file"  name="adhar_copy"  class="form-control" required>
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Tax Receipt</label>
                                       <input type="file"  name="tax_reciept"  class="form-control" required>
                                	</div> 
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Username</label>
                                       <input type="text"  name="username"  class="form-control" required>
                                	</div>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Password</label>
                                       <input type="password"  name="password"  class="form-control" required>
                                	</div>                                                                                                
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12" style="float:right">
                            	
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="reset" value="Reset" class="btn btn-block btn-danger">
                            	 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="submit" value="Submit" class="btn btn-block btn-primary">
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
