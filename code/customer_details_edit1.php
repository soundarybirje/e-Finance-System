<?php
  include('dbconnect.php');
  
 $customer_id=$_REQUEST['customer_id'];
 
  $sql="select * from customer_details where customer_id='$customer_id'";
  $res=mysql_query($sql);
  $row=mysql_fetch_array($res);
  
  ?>  
  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="customer_details_edit2.php">
<input type="hidden" value="<?php echo $row["customer_id"]; ?>" name="customer_id">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
    <table width="462" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">CUSTOMER DETAILS </div></td>
      </tr>
    <tr>
      <td width="215">Customer full name </td>
      <td width="231"><input name="customer_full_name" type="text" id="customer_full_name" value="<?php echo $row["customer_full_name"];?>"></td>
    </tr>
    <tr>
      <td>Gender      </td>
      <td><input name="gender" type="radio" value="Male">
        male
        <input name="gender" type="radio" value="Female">
        female</td>
    </tr>
    <tr>
      <td>Occupation      </td>
      <td><input name="occupation" type="text" id="occupation" value="<?php echo $row["occupation"];?>"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address" id="address"><?php echo $row["address"];?></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" id="city" value="<?php echo $row["city"];?>"></td>
    </tr>
    <tr>
      <td>Email id </td>
      <td><input name="email_id" type="text" id="email_id" value="<?php echo $row["email_id"];?>"></td>
    </tr>
    <tr>
      <td>Contact no </td>
      <td><input name="contact_no" type="text" id="contact_no" value="<?php echo $row["contact_no"];?>"></td>
    </tr>
    <tr>
      <td>Customer code      </td>
      <td><input name="customer_code" type="text" id="customer_code" value="<?php echo $row["customer_code"];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit">        
          <input type="reset" name="Reset" value="Reset">
      </div></td>
      </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
