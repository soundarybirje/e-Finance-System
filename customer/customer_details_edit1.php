<?php include('meta_tags.php');?>
<?php include('menus.php');?>
    
  
    <?php include('side_menu.php');?>
    

    <div class="content">
        
<div class="header">
            
            <h1 class="page-title">Customer Details</h1>
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
 
  $sql="select * from customer_details where customer_code='$uname'";
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
<form name="form1"id="formID" method="post" action="customer_details_edit2.php">
<input type="hidden" value="<?php echo $row["customer_id"]; ?>" name="customer_id">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
    <table width="462" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">CUSTOMER DETAILS </div></td>
      </tr>
    <tr>
      <td width="215">Customer full name </td>
      <td width="231"><input name="customer_full_name" type="text" class="validate[required,custom[onlyLetter]]" id="customer_full_name" value="<?php echo $row["customer_full_name"];?>"></td>
    </tr>
    <tr>
      <td>Gender      </td>
      <td><input name="gender" type="radio" value="male" <?php if($row["gender"]=='male') { ?> checked <?php } ?>>
        Male
        <input name="gender" type="radio" value="female"  <?php if($row["gender"]=='female') { ?> checked <?php } ?>>
        Female</td>
    </tr>
    <tr>
      <td>Occupation      </td>
      <td><input name="occupation" type="text"  class="validate[required,custom[onlyLetter]]" id="occupation" value="<?php echo $row["occupation"];?>"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address"  class="validate[required]" id="address"><?php echo $row["address"];?></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" class="validate[required,custom[onlyLetter]]" id="city" value="<?php echo $row["city"];?>"></td>
    </tr>
    <tr>
      <td>Email id </td>
      <td><input name="email_id" type="text" class="validate[required,custom[email]]" id="email_id" value="<?php echo $row["email_id"];?>"></td>
    </tr>
    <tr>
      <td>Contact no </td>
      <td><input name="contact_no" type="text" class="validate[required,custom[telephone]]" id="contact_no" value="<?php echo $row["contact_no"];?>"></td>
    </tr>
    <tr>
      <td>Customer code      </td>
      <td><input name="customer_code" type="text" class="validate[required]" readonly=""  id="customer_code" value="<?php echo $row["customer_code"];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Update" class="btn btn-primary">        
       
          <input type="reset" name="Reset" value="Reset">
      </div></td>
      </tr>
  </table>
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