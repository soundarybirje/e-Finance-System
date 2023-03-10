<?php include('meta_tags.php');?>
<?php include('menus.php');?>
    
  
    <?php include('side_menu.php');?>
    

    <div class="content">
        
<div class="header">
            
            <h1 class="page-title">Agent Profile Details</h1>
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
 
  $sql="select * from pigmy_agent where agent_code='$uname'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  
  ?>  
<form name="form1" method="post" action="pigmy_agent_edit2.php">
<input type="hidden" value="<?php echo $row["pigmy_agent_id"]; ?>" name="pigmy_agent_id">
  <p>&nbsp;</p>
  <table width="386" height="371" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">PIGMY AGENT</div></td>
    </tr>
    <tr>
      <td>Pigmy Agent Name </td>
      <td><input name="pigmy_agent_name" type="text" id="pigmy_agent_name" value="<?php echo $row["pigmy_agent_name"];?>"></td>
    </tr>
    <tr>
      <td>Gender      </td>
      <td><input name="gender"  type="radio" value="male" <?php if($row["gender"]=='male') { ?> checked <?php } ?>>
        Male
        <input name="gender" type="radio" value="female" <?php if($row["gender"]=='female') { ?> checked <?php } ?> >
        Female</td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address" id="address"><?php echo $row["address"];?></textarea></td>
    </tr>
    <tr>
      <td>Smail id </td>
      <td><input name="email_id" type="text" id="email_id" value="<?php echo $row["email_id"];?>"></td>
    </tr>
    <tr>
      <td>contact no </td>
      <td><input name="contact_no" type="text" id="contact_no" value="<?php echo $row["contact_no"];?>"></td>
    </tr>
    <tr>
      <td>agent code </td>
      <td><input name="agent_code" type="text" id="agent_code" value="<?php echo $row["agent_code"];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Update" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset"></td>
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
      

