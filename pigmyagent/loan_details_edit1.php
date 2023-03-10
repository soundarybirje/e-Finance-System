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
<form name="form1" method="post" action="loan_details_edit2.php">
<input type="hidden" value="<?php echo $row["loan_id"]; ?>" name="loan_id">
  <p>&nbsp;</p>
    <table width="353" height="370" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">LOAN DETAILS </div></td>
    </tr>
    <tr>
      <td width="125">Loan name </td>
      <td width="212"><input name="loan_name" type="text" id="loan_name" value="<?php echo $row["loan_name"];?>"></td>
    </tr>
    <tr>
      <td>Loan desc</td>
      <td><textarea name="loan_desc" id="loan_desc"><?php echo $row["loan_desc"];?></textarea></td>
    </tr>
    <tr>
      <td>Loan duration </td>
      <td><input name="loan _duration" type="text" id="loan _duration" value="<?php echo $row["loan_duration"];?>"></td>
    </tr>
    <tr>
      <td>Loan interest</td>
      <td><input name="loan_ins" type="text" id="loan_ins" value="<?php echo $row["loan_ins"];?>"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input name="status" type="text" id="status" value="<?php echo $row["status"];?>"></td>
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
</body>
</html>
