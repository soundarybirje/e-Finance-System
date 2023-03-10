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
<?php
 include('dbconnect.php');
	$sn=1;
	$sql="select max(pigmy_agent_id) from pigmy_agent";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);
	
	$cid=$row[0]+1;
	$c='ACODE'.$cid;
	
?>
<form name="form1" id="formID" method="post" action="pigmy_agent_insert.php">
  <p>&nbsp;</p>
  <table width="505" height="432" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">PIGMY AGENT</div></td>
    </tr>
    <tr>
      <td>pigmy agent name </td>
      <td><input name="pigmy_agent_name" type="text" class="validate[required,custom[onlyLetter]]" id="pigmy_agent_name"></td>
    </tr>
    <tr>
      <td>gender      </td>
      <td><input name="gender" type="radio" value="male">
        male
        <input name="gender" type="radio" value="female">
        female</td>
    </tr>
    <tr>
      <td>address</td>
      <td><textarea name="address" class="validate[required]" id="address"></textarea></td>
    </tr>
    <tr>
      <td>email id </td>
      <td><input name="email_id" type="text" class="validate[required,custom[email]]" id="email_id"></td>
    </tr>
    <tr>
      <td>contact no </td>
      <td><input name="contact_no" type="text" class="validate[required,custom[mobile]]" id="contact_no"></td>
    </tr>
    <tr>
      <td>agent code </td>
      <td><input name="agent_code" type="text" class="validate[required]" id="agent_code" readonly="" value="<?php echo $c; ?>"></td>
    </tr>
    <tr>
      <td colspan="2">
	    <div align="center">
	    <input type="submit" name="Submit" value="Submit" class="btn btn-primary">       
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
      
