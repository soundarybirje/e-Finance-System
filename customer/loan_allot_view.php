<?php include('meta_tags.php');  ?>

<?php include('menus.php');  ?>

    
 <?php include('side_menu.php');  ?>
    
    <div class="content">
        
 <div class="header">
            
            <h1 class="page-title">loan allot</h1>
        </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                    
<div class="btn-toolbar">
    
   
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <table class="table" id="demo-dtable-01">

<thead>
  <tr>
    <th>SNo</th>
    <th>Loan name </th>
    <th>Customer Name </th>
   
    <th>Allot Amount</th>
    <th>Duration(Months)</th>
	 <th>Intrest</th>
	  <th>Intrest Amount</th>
	  <th>Total Amount</th>
	  <th>Allot Date </th>
   
  </tr>
 </thead>
  <tbody>
  <?php
    include('dbconnect.php');
	$sn=1;
	$uname=$_SESSION['uname'];
	$tot=0;
	$sql="select * from  loan_allot a,loan_details b,customer_details c where a.loan_id=b.loan_id and a.customer_id=c.customer_id and c.customer_code='$uname'";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	$in=($row["allot_amt"]*$row["loan_ins"]) / 100;
	$insrate=$in*$row["duration(month)"];
	$totamount=$insrate+$row["allot_amt"];
	
	
  ?>
  <tr>
    <td><?php echo $sn++;?></td>
    <td><?php echo $row["loan_name"];?></td>
    <td><?php echo $row["customer_full_name"];?></td>
   
    <td><?php echo $row["allot_amt"];?></td>
    <td><?php echo $row["duration(month)"];?> Months</td>
	 <td><?php echo $row["loan_ins"];?> %</td>
	<td> <?php echo $insrate; ?></td>
	<td> <?php echo $totamount; ?></td>
	 <td><?php echo $row["allot_date"];?></td>
   
  </tr>
   <?php
  }
  ?>
</table>

    
    
</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">?</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>


                    
 <?php include('footer.php');  ?>






