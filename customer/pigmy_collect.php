<?php include('meta_tags.php');?>
<?php include('menus.php');?>
    
  
    <?php include('side_menu.php');?>
    

    <div class="content">
        
<div class="header">
            
            <h1 class="page-title">Pigmy Collect Details</h1>
        </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
<?php include('val.php');?>

<form name="form1" id="formID" method="post" action="pay_online.php">
  <p>&nbsp;</p>
  <table width="450" height="439" border="0" align="center">
   
    <tr>
      <td> Select Customer Name </td>
      <td><select name="customer_id" readonly id="customer_id">
        
        <?php
		 include('dbconnect.php');
	$sn=1;
	$uname=$_SESSION['uname'];
	$sql="select * from customer_details where customer_code='$uname'";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
    ?>
        <option value="<?php echo $row['customer_id']?>"><?php echo $row['customer_full_name']?></option>
        <?php
	}
	?>
      </select></td>
    </tr>
    <tr>
      <td>Agent Name </td>
      <td><select name="agent_id" id="agent_id" >
       <option>select</option>
        <?php
		
	$sql="select * from pigmy_agent ";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
    ?>
        <option value="<?php echo $row['pigmy_agent_id']?>"><?php echo $row['pigmy_agent_name']?></option>
        <?php
	}
	?>
      </select></td>
    </tr>
    <tr>
      <td>Collect Amount</td>
      <td><input name="collect_amount" type="text" class="validate[required,custom[onlyNumber]]" id="collect_amount"></td>
    </tr>
    <tr>
      <td>Collect Date </td>
      <td><input name="collect_date" type="date" readonly="" value="<?php echo date('Y-m-d') ?>" class="validate[required,custom[date]]" id="collect_date"></td>
    </tr>
    <tr>
      <td>Time</td>
      <td><input name="time" type="text"  readonly="" class="validate[required]" value="<?php echo date('H:i:s') ?>" id="time"></td>
    </tr>
	<?php
	$sql="select max(references_no) from pigmy_collect";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);
	$r=$row[0]+1;
	
	?>
    <tr>
      <td>Reference no. </td>
      <td><input name="reference_no" readonly="" type="text" class="validate[required]" value="<?php echo $r; ?>" id="reference_no"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit"  class="btn btn-primary">        
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
      </div></td>
    </tr>
  </table>
 
</form>
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
      
