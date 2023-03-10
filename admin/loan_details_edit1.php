<?php include('meta_tags.php');?>
<?php include('menus.php');?>
    
  
    <?php include('side_menu.php');?>
    

    <div class="content">
        
<div class="header">
            
            <h1 class="page-title">loan details</h1>
        </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
<?php include('val.php');?>
<?php
  include('dbconnect.php');
  
 $loan_id=$_REQUEST['loan_id'];
 
  $sql="select * from loan_details where loan_id='$loan_id'";
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
<form name="form1" id="formID" method="post" action="loan_details_edit2.php">
<input type="hidden" value="<?php echo $row["loan_id"]; ?>" name="loan_id">
  <p>&nbsp;</p>
    <table width="353" height="370" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">LOAN DETAILS </div></td>
    </tr>
    <tr>
      <td width="125">Loan name </td>
      <td width="212"><input name="loan_name" type="text" class="validate[required,custom[onlyLetter]]" id="loan_name" value="<?php echo $row["loan_name"];?>"></td>
    </tr>
    <tr>
      <td>Loan desc</td>
      <td><textarea name="loan_desc" class="validate[required]" id="loan_desc"><?php echo $row["loan_desc"];?></textarea></td>
    </tr>
    <tr>
      <td>Loan duration </td>
      <td><input name="loan_duration" type="text" class="validate[required]" id="loan _duration" value="<?php echo $row["loan_duration"];?>"></td>
    </tr>
    <tr>
      <td>Loan interest</td>
      <td><input name="loan_ins" type="text" class="validate[required]" id="loan_ins" value="<?php echo $row["loan_ins"];?>"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input name="status" type="text" class="validate[required]" id="status" value="<?php echo $row["status"];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">        
        <input type="reset" name="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
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
