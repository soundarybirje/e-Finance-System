<?php include('meta_tags.php');?>
<?php include('menus.php');?>
    
  
    <?php include('side_menu.php');?>
    

    <div class="content">
        
<div class="header">
            
            <h1 class="page-title">Agent Report Details</h1>
        </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
<?php include('val.php');?>

<form name="form1" id="formID" method="post" action="agent_pigmy_collect_view.php">
  <p>&nbsp;</p>
  <table width="534" height="323" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">AGENT REPORT SEARCH</div></td>
    </tr>
    <tr>
      <td> Select Customer </td>
      <td><select name="pigmy_agent_id" id="pigmy_agent_id">
        <option>select</option>
		<?php
		 include('dbconnect.php');
	$sn=1;
	$sql="select * from  pigmy_agent";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
    ?>
	  <option value="<?php echo $row['pigmy_agent_id']?>"><?php echo $row['pigmy_agent_name']?> /<?php echo $row['agent_code']?></option>
	<?php
	}
	?>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Search"  class="btn btn-primary">        
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
      
