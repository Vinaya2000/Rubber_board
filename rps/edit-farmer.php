<?php include('../db-connect/db.php'); 
$edit = $_GET['edit'];
$result =$db ->prepare("SELECT * FROM farmer  WHERE id='$edit'");
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
							Edit Farmer
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="action/farmer_edit.php" enctype="multipart/form-data" class="forms">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Farmer Information</strong>
                                        </div>
                                    
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Beneficiary Id</label>
                                               <input type="text"  name="b_id"   class="form-control" value="<?php echo $rows['b_id'];?>" readonly>
                                               <input type="hidden"  name="edit"  value="<?php echo $edit; ?>">
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="name"   class="form-control"  value="<?php echo $rows['name']; ?>">
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Age</label>
                                           <input type="text"  name="age"   class="form-control" value="<?php echo $rows['age']; ?>">
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Date Of Birth</label>
                                           <input type="date"  name="dob"   class="form-control" value="<?php echo $rows['dob']; ?>">
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Sex</label>
                                            <select class="form-control"  name="gendar"  required>
                                                    <option value="<?php echo $rows['gendar'] ?>"><?php echo $rows['gendar']; ?></option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                             </select>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Guardian Name</label>
                                          	<input type="text"  name="guardian_name"   class="form-control" value="<?php echo $rows['guardian_name']; ?>">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Relation With Guardian</label>
                                           <input type="text"  name="relation_guardian"  class="form-control" value="<?php echo $rows['relation_guardian']; ?>">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                          <label>Qualification</label>
                                         	<input type="text"  name="qualification"  class="form-control" value="<?php echo $rows['qualification']; ?>">
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Mobile No</label>
                                            <input type="text"  name="mobile_no" value="<?php echo $rows['mobile']; ?>"  class="form-control" >
                                          </div> 
                                           <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Aadhar No</label>
                                            <input type="text"  name="adhar_no" value="<?php echo $rows['adhar_no']; ?>"  class="form-control" >
                                          </div> 
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>R P S Permit No</label>
                                            <input type="text"  name="rps_permit_no" value="<?php echo $rows['rps_permit_no']; ?>" class="form-control" >
                                          </div>                                           
                                          <div class="col-md-6 col-sm-6 col-xs-6">
                                           <label>Address</label>
                                          <textarea  name="address" rows="1" class="form-control"><?php  echo $rows['address']; ?></textarea>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Village</label>
                                            <input type="text"  name="village" value="<?php echo $rows['village']; ?>"  class="form-control" >
                                          </div>                                         
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Panchayath</label>
                                            <input type="text"  name="panchayath" value="<?php echo $rows['panchayath']; ?>" class="form-control" >
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Thaluk</label>
                                            <input type="text"  name="thaluk" value="<?php echo $rows['thaluk']; ?>" class="form-control" >
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>District</label>
                                            <select class="form-control"  name="district"  required>
                                                    <option value="<?php echo $rows['district'] ?>"><?php echo $rows['district']; ?></option>
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
                                        <select name="state" class="form-control">
                                            <option value="<?php echo $rows['state']; ?>"><?php echo $rows['state']; ?></option>
                                            <option>Kerala</option>
                                            <option>Tamilnadu</option>
                                            <option>Andhra</option>                                                
                                        </select>
                                    </div> 
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Pin Code</label>
                                       <input type="text"  name="pin_code" value="<?php echo $rows['pin_code']; ?>" class="form-control">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Account No</label>
                                       <input type="text"  name="account_no" value="<?php echo $rows['acc_no']; ?>" class="form-control">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>IFSC Code</label>
                                       <input type="text"  name="ifsc" value="<?php echo $rows['ifsc_code']; ?>" class="form-control">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Branch</label>
                                       <input type="text"  name="branch" value="<?php echo $rows['branch']; ?>" class="form-control">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Bank</label>
                                       <input type="text"  name="bank" value="<?php echo $rows['bank']; ?>" class="form-control">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Account Type(Single/Joint)</label>
                                       <input type="text"  name="account_type" value="<?php echo $rows['account_type']; ?>" class="form-control">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Year Of Planting</label>
                                       <input type="text"  name="year_of_planting" value="<?php echo $rows['year_of_planting']; ?>" class="form-control">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Area(Hectare) Total</label>
                                       <input type="text"  name="area_hector_total" value="<?php echo $rows['area_hector']; ?>" class="form-control">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Area(Hectare) Tapping</label>
                                       <input type="text"  name="area_hector_tapping" value="<?php echo $rows['area_hector_tappig']; ?>" class="form-control">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>No Of Trees</label>
                                       <input type="text"  name="no_of_trees" value="<?php echo $rows['no_of_trees']; ?>" class="form-control">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Bank Passbook Copy</label>
                                       <input type="file"  name="bank_passbook"  class="form-control">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Adhar Copy</label>
                                       <input type="file"  name="adhar_copy"  class="form-control">
                                	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Tax Receipt</label>
                                       <input type="file"  name="tax_reciept"  class="form-control">
                                	</div> 
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Username</label>
                                       <input type="text"  name="username" value="<?php echo $rows['username']; ?>" class="form-control">
                                	</div>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Password</label>
                                       <input type="text"  name="password" value="<?php echo $rows['password']; ?>" class="form-control">
                                	</div>                                                                                                
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12" style="float:right">
                            	
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="reset" value="Reset" class="btn btn-block btn-danger" id="cls1">
                            	 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="submit" value="Submit" class="btn btn-block btn-primary" id="save1">
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
