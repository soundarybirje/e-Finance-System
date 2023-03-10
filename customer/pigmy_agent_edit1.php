<?php
  include('dbconnect.php');
  
 $pigmy_agent_id=$_REQUEST['pigmy_agent_id'];
 
  $sql="select * from pigmy_agent where pigmy_agent_id='$pigmy_agent_id'";
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
<form name="form1" method="post" action="pigmy_agent_edit2.php">
<input type="hidden" value="<?php echo $row["pigmy_agent_id"]; ?>" name="pigmy_agent_id">
  <p>&nbsp;</p>
  <table width="386" height="371" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">PIGMY AGENT</div></td>
    </tr>
    <tr>
      <td>pigmy agent name </td>
      <td><input name="pigmy_agent_name" type="text" id="pigmy_agent_name" value="<?php echo $row["pigmy_agent_name"];?>"></td>
    </tr>
    <tr>
      <td>gender      </td>
      <td><input name="gender" type="radio" value="radiobutton">
        male
        <input name="gender" type="radio" value="radiobutton">
        female</td>
    </tr>
    <tr>
      <td>address</td>
      <td><textarea name="address" id="address"><?php echo $row["address"];?></textarea></td>
    </tr>
    <tr>
      <td>email id </td>
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
      <td colspan="2"><input type="submit" name="Submit" value="Submit">        <input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>

