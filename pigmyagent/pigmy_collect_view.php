<?php include('meta_tags.php');  ?>

<?php include('menus.php');  ?>

    
 <?php include('side_menu.php');  ?>
    
    <div class="content">
        
 <div class="header">
            
            <h1 class="page-title">Pigmy Collect</h1>
        </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                    
<div class="btn-toolbar">
    <a href="pigmy_collect.php" class="btn btn-primary"><i class="icon-plus"></i> Add New Pigmy Collect</a>
	 <a href="pigmy_collect_view_next.php" class="btn btn-primary"><i class="icon-plus"></i> Today Pigmy Collect Amount</a>
   
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <table class="table" id="demo-dtable-01">
<thead>
  <tr>
    <th>SNo</th>
    <th>Customer id </th>
    <th>Collect Amount</th>
    <th>Collect Date </th>
    <th>Time</th>
    <th>Reference No </th>
   
  </tr>
  </thead>
   <tbody>
  <?php
    include('dbconnect.php');
	$sn=1;
	$tot=0;
	$uname=$_SESSION['uname'];
	$sql="select * from pigmy_collect a,customer_details b, pigmy_agent p where a.customer_id=b.customer_id and a.pigmy_agent_id=p.pigmy_agent_id and p.agent_code='$uname' ";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	$tot=$tot+$row["collect_amt"];
  ?>
  <tr>
    <td><?php echo $sn++; ?></td>
    <td><?php echo $row["customer_full_name"];?></td>
    <td><?php echo $row["collect_amt"];?></td>
    <td><?php echo $row["collect_date"];?></td>
    <td><?php echo $row["time"];?></td>
    <td>REF-<?php echo $row["references_no"];?></td>
   
  </tr>
    <?php
  }
  ?>
</table>
<p><b>Tottal Collect Amount : <?php echo $tot;?></b></p>
</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
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


