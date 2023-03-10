<?php include('meta_tags.php');  ?>

<?php include('menus.php');  ?>

    
 <?php include('side_menu.php');  ?>
    
    <div class="content">
        
 <div class="header">
            
            <h1 class="page-title">loan details</h1>
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
    <th>S.No</th>
    <th>Loan Name </th>
    <th>Description</th>
    <th>Duration(Month)</th>
    <th>Interest</th>
    <th>Status</th>
   
  </tr>
  </thead>
  <tbody>
  <?php
    include('dbconnect.php');
	$sn=1;
	$sql="select * from loan_details";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
  ?>
  <tr>
    <td><?php echo $sn++; ?></td>
    <td><?php echo $row["loan_name"];?></td>
    <td><?php echo $row["loan_desc"];?></td>
    <td><?php echo $row["loan_duration"];?></td>
    <td><?php echo $row["loan_ins"];?></td>
    <td><?php echo $row["status"];?></td>
   
  </tr>
  <?php
  }
  ?>
  </tbody>
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


