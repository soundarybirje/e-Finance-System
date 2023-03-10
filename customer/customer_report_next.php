<?php include('meta_tags.php');?>
<?php include('menus.php');?>
    
  
    <?php include('side_menu.php');?>
    

    <div class="content">
        
<div class="header">
            
            <h1 class="page-title">Customer Report Details</h1>
        </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
<?php include('val.php');?>

 
 <?php
include('dbconnect.php');
$uname=$_SESSION['uname'];

	$sql="select * from customer_details where customer_code='$uname'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);
	
?>
 <table class="table">
   <tr>
     <th>Customer Name : <?php echo $row["customer_full_name"];?></th>
     <td>&nbsp;</td>
     <th>Customer Code : <?php echo $row["customer_code"];?></th>
     <td>&nbsp;</td>
   </tr>
 </table>
 
  <b>Loan Allot Details</b>
 <table class="table" id="demo-dtable-01">

<thead>
  <tr>
    <th>SNo</th>
    <th>Loan name </th>
   
   
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
    
	$sn=1;
	$totalot=0;
	$totins=0;
	$tot=0;
	$sql="select * from  loan_allot a,loan_details b,customer_details c where a.loan_id=b.loan_id and a.customer_id=c.customer_id and c.customer_code='$uname'";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	$in=($row["allot_amt"]*$row["loan_ins"]) / 100;
	$insrate=$in*$row["duration(month)"];
	$totamount=$insrate+$row["allot_amt"];
	
	$totalot=$tot+$row["allot_amt"];
	$totins=$tot+$insrate;
	$tot=$tot+$totamount;
  ?>
  <tr>
    <td><?php echo $sn++;?></td>
    <td><?php echo $row["loan_name"];?></td>
   
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
<p>&nbsp;</p>

<b>Pigmy Details</b>
 <table class="table" id="demo-dtable-01">
<thead>
  <tr>
    <th>SNo</th>
     <th>Agent Name</th>
	
	<th>Collect Amount</th>
    <th>Collect Date </th>
    <th>Time</th>
    <th>Reference No </th>
   
  </tr>
  </thead>
  <tbody>
  
  <?php
    
	$sn=1;
	$totpa=0;
	$sql="select * from pigmy_collect a,customer_details b,pigmy_agent pa where a.customer_id=b.customer_id and a.pigmy_agent_id=pa.pigmy_agent_id and b.customer_code='$uname'";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	$totpa=$totpa+$row["collect_amt"];
  ?>
  <tr>
    <td><?php echo $sn++; ?></td>
    <td><?php echo $row["pigmy_agent_name"];?></td>
    <td><?php echo $row["collect_amt"];?></td>
    <td><?php echo $row["collect_date"];?></td>
    <td><?php echo $row["time"];?></td>
    <td><?php echo $row["references_no"];?></td>
    
  </tr>
    <?php
  }
  ?>
</table>

 <table class="table">
      <tr>
        <td>Loan Allot  Amount : <font color="#FF0000"><?php echo $totalot; ?></font>&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td>Total Intrest Amount : <font color="#FF0000"><?php echo $totins; ?></font>&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td>Total Loan Amount : <font color="#FF0000"><b><?php echo $tot; ?></b></font>&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td>Total Pigmy Amount : <font color="#663300"><b><?php echo $totpa; ?></b></font></td>
        <td></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td>Loan Balance Amount : <font color="#000099"><b><?php echo $tot-$totpa; ?> </b></font></td>
        <td></td>
      </tr>
    </table>
</div>
  </div>

</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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
      
