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
    <a href="loan_allot.php" class="btn btn-primary"><i class="icon-plus"></i> Add New loan allot</a>
   
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <table class="table" id="demo-dtable-01">

<thead>
  <tr>
    <th>SNo</th>
    <th>Loan id </th>
    <th>Customer id </th>
    <th>Allot date </th>
    <th>Allot amount</th>
    <th>Duration(month)</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
 </thead>
  <tbody>
  <?php
    include('dbconnect.php');
	$sn=1;
	$sql="select * from  loan_allot a,loan_details b,customer_details c where a.loan_id=b.loan_id and a.customer_id=c.customer_id";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
  ?>
  <tr>
    <td><?php echo $sn++;?></td>
    <td><?php echo $row["loan_name"];?></td>
    <td><?php echo $row["customer_full_name"];?></td>
    <td><?php echo $row["allot_date"];?></td>
    <td><?php echo $row["allot_amt"];?></td>
    <td><?php echo $row["duration"];?></td>
    <td><a href ="loan_allot_edit1.php?loan_allot_id=<?php echo $row['loan_allot_id'];?>" onClick="return confirm('are you sure  want to edit this?')">Edit</a></td>
    <td><a href="loan_allot_delete.php?loan_allot_id=<?php echo $row['loan_allot_id'];?>" onClick="return confirm('are you sure  want to delete this?')">Delete</a></td>
  </tr>
   <?php
  }
  ?>
</table>
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






