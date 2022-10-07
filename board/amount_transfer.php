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
							Amount Transfer
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="action/amount_transfer.php" class="forms" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                               	  <div class="row">
                                      <div class="col-md-6 col-sm-12 col-xs-12">
                                         <label>Beneficiary ID</label>
                     					<input list="bencid" placeholder="Search" required class="form-control" name="b_id" id="b_id">
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
                                         <div class="col-md-6 col-sm-6 col-xs-12">
                                              <label>Name</label>
                                                <input type="text"  name="name"  class="form-control" id="name" readonly>
                                        </div> 
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Bank</label>
                                           <input type="text"  name="bank" class="form-control" id="bank" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Account No</label>
                                           <input type="text"  name="accno" class="form-control" id="accno" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>IFSC CODE</label>
                                           <input type="text"  name="ifcode" class="form-control" id="ifcode" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Branch</label>
                                           <input type="text"  name="branch" class="form-control" id="branch" readonly>
                                          </div>
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Amount</label>
                                           <input type="number"  name="amount"  class="form-control" required min="0" step="0.01">    
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Date</label>
                                           <input type="date"  name="date"  class="form-control" required max="<?php echo date("Y-m-d");?>">
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

<script type="text/javascript">
$(document).ready(function()
{
	$('#b_id').change(function()
	{
		var b_id = $("#b_id").val();
		$.ajax({				
			type:'POST',
			url:'action/transfer_select.php',
			data:'b_id='+b_id,	
			dataType:"JSON",			
			success:function(data)
			{
			   $('#name').val(data.name);
			   $('#name').val(data.name);
			   $('#bank').val(data.bank);
			   $('#accno').val(data.accno);
			   $('#ifcode').val(data.ifcode);
			   $('#branch').val(data.branch);
			}				
		}); 						
	});			
});
</script>
</body>
</html>
