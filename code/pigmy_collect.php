<?php include('meta_tags.php');?>
<?php include('menus.php');?>
    
  
    <?php include('side_menu.php');?>
    

    <div class="content">
        
<div class="header">
            
            <h1 class="page-title">Pigmy Agent Details</h1>
        </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
<?php include('val.php');?>

<form name="form1" id="formID" method="post" action="pigmy_collect_insert.php">
  <p>&nbsp;</p>
  <table width="294" height="323" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">PIGMY COLLECT</div></td>
    </tr>
    <tr>
      <td> select customer name </td>
      <td><select name="customer_id" id="customer_id">
        <option>select</option>
		<?php
		 include('dbconnect.php');
	$sn=1;
	$sql="select * from customer_details";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
    ?>
	  <option value="<?php echo $row['customer_id']?>"><?php echo $row['customer_full_name']?></option>
	<?php
	}
	?>
      </select></td>
    </tr>
    <tr>
      <td>collect amount</td>
      <td><input name="collect_amount" type="text" class="validate[required,custom[onlyNumber]]" id="collect_amount"></td>
    </tr>
    <tr>
      <td>collect date </td>
      <td><input name="collect_date" type="date" class="validate[required,custom[date]]" id="collect_date"></td>
    </tr>
    <tr>
      <td>time</td>
      <td><input name="time" type="text" class="validate[required]" id="time"></td>
    </tr>
    <tr>
      <td>reference no. </td>
      <td><input name="reference_no" type="text" class="validate[required]" id="reference_no"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit"  class="btnclass btn-primary">        
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
      </div></td>
    </tr>
  </table>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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
      
