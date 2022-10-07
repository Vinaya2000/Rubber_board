 			 <span>Latest Subsidy Apply</span>
             <hr />
			<div class="box-body well">
              <div class="table-responsive">
                     <table id="example1" class="table table-bordered table-striped table-responsive">
                       <thead>
                       <tr>
                            <th>Beneficiary Id</th>
                            <th>Name</th>                                                   
                            <th>Year</th>
                            <th>Date Period</th>
                            <th>Bill Date</th>
                            <th>Bill No</th>
                            <th>Solid Quantity</th>
                            <th>Delear License No</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                      </thead>
                    <tbody>				
                    <?php 
                    $result =$db ->prepare("SELECT * FROM subsidy where bstat='pending' ");
                    $result->execute();	
                    for($i=0; $rows= $result->fetch(); $i++){	?>
                    <tr>
                        <td><?php echo $rows['b_id']; ?></td>
                        <td><?php echo $rows['name']; ?></td>
                        <td><?php echo $rows['years']; ?></td>
                        <td><?php echo $rows['date_period']; ?></td>
                        <td><?php echo $rows['bill_date']; ?></td>
                        <td><?php echo $rows['bill_no']; ?></td>
                        <td><?php echo $rows['solid_qty']; ?></td>
                        <td><?php echo $rows['dealer_licence']; ?></td>
                        <td><?php echo $rows['amount']; ?></td>
                        <td><?php echo $rows['dat']; ?></td>
                        <?php } ?>
                    </tr>
                    </tbody>
                  </table>
         		</div>
			</div>