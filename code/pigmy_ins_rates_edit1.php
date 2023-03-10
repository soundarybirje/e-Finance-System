<?php
  include('dbconnect.php');
  
 $pigmy_ins_rates_id=$_REQUEST['pigmy_ins_rates_id'];
 
  $sql="select * from pigmy_ins_rates  where pigmy_ins_rates_id='$pigmy_ins_rates_id'";
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
<form name="form1" method="post" action="pigmy_ins_rates_edit2.php">
<input type="hidden" value="<?php echo $row["pigmy_ins_rates_id"]; ?>" name="pigmy_ins_rates_id">
  <p>&nbsp;</p>
  <p align="left">&nbsp;</p>
  <table width="370" height="285" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">PIGMY_INTEREST_RATES</div></td>
    </tr>
    <tr>
      <td width="149">pigmy interest name </td>
      <td width="239"><input name="pigmy_ins_name" type="text" id="pigmy_ins_name" value="<?php echo $row["pigmy_ins_name"];?>"></td>
    </tr>
    <tr>
      <td>interest rate </td>
      <td><input name="interest_rate" type="text" id="interest_rate" value="<?php echo $row["interest_rate"];?>"></td>
    </tr>
    <tr>
      <td>duration</td>
      <td><input name="duration" type="text" id="duration" value="<?php echo $row["duration"];?>"></td>
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
</body>
</html>
