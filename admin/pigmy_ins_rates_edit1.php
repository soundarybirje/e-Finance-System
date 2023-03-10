<?php include('meta_tags.php');?>
<?php include('menus.php');?>
    
  
    <?php include('side_menu.php');?>
    

    <div class="content">
        
<div class="header">
            
            <h1 class="page-title">pigmy collect</h1>
        </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
<?php include('val.php');?>
<?php
  include('dbconnect.php');
  
 $pigmy_ins_rates_id=$_REQUEST['pigmy_ins_rates_id'];
 
  $sql="select * from pigmy_ins_rates  where pigmy_ins_rates_id='$pigmy_ins_rates_id'";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  
  ?>  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" id="formID" method="post" action="pigmy_ins_rates_edit2.php">
<input type="hidden" value="<?php echo $row["pigmy_ins_rates_id"]; ?>" name="pigmy_ins_rates_id">
  <p>&nbsp;</p>
  <p align="left">&nbsp;</p>
  <table width="370" height="285" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">PIGMY_INTEREST_RATES</div></td>
    </tr>
    <tr>
      <td width="149">pigmy interest name </td>
      <td width="239"><input name="pigmy_ins_name" type="text"  class="validate[required]" id="pigmy_ins_name" value="<?php echo $row["pigmy_ins_name"];?>"></td>
    </tr>
    <tr>
      <td>interest rate </td>
      <td><input name="interest_rate" type="text"  class="validate[required]" id="interest_rate" value="<?php echo $row["interest_rate"];?>"></td>
    </tr>
    <tr>
      <td>duration(month)</td>
      <td><input name="duration" type="text"  class="validate[required]" id="duration" value="<?php echo $row["duration(month)"];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit">        
          <input type="reset" name="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
  <p>&nbsp; </p>
  <p>&nbsp;  </p>
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
