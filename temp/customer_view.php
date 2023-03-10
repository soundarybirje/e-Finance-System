<?php include('meta_tags.php');  ?>

<?php include('menus.php');  ?>

    
 <?php include('side_menu.php');  ?>
    
    <div class="content">
        
 <div class="header">
            
            <h1 class="page-title">Polocy Holder Details</h1>
        </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                    
<div class="btn-toolbar">
    <a href="customer.php" class="btn btn-primary"><i class="icon-plus"></i> Add New Polocy Holder Details</a>
   
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <table class="table" id="demo-dtable-01">
      <thead>
        <tr>
				<th>Sl No</th>
				<th>Customer Name </th>
				<th>age </th>
				
				<th>Address</th>
				<th>State</th>
				<th>City</th>
				<th>Contact N0 </th>
				<th>E-mail ID </th>
				<th>Cust Code </th>
				<th>Attachments </th>
				<th>Delete</th>
				<th>Edit</th>
        </tr>
      </thead>
      <tbody>

  <?php
  include('dbconnect.php');
 $sql="select * from customer_det c,state s,city ct where c.state_id=s.state_id and c.city_id=ct.city_id and s.state_id=ct.state_id";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>


        <tr>
				<td><?php echo $row['customer_id']?>&nbsp;</td>
				<td><?php echo $row['customer_full_name']?>&nbsp;</td>
				<td><?php echo $row['age']?>&nbsp;</td>
				<td><?php echo $row['address']?>&nbsp;</td>
				<td><?php echo $row['state_name']?>&nbsp;</td>
				<td><?php echo $row['city_name']?>&nbsp;</td>
				<td><?php echo $row['contact_number']?>&nbsp;</td>
				<td><?php echo $row['email_id']?>&nbsp;</td>
				<td><?php echo $row['customer_code']?>&nbsp;</td>
		  <td><a href="../files/<?php echo $row['proof_attachments'];?>">Documents</a></td>
				<td><a href="customer_delete.php?fid=<?php echo $row['customer_id']; ?>" onClick="return confirm('Are you sure?...');">Delete</a></td>
				<td><a href="customer_edit.php?fid=<?php echo $row['customer_id'];?>">Edit</a></td>
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




