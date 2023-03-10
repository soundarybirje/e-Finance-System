<?php include('val.php');?>
<form name="form1" id="formID" method="post" action="loan_allot_insert.php">
<?php
  include('dbconnect.php');
  
 $loan_allot_id=$_REQUEST['loan_allot_id'];
 
  $sql="select * from loan_allot where loan_allot_id='$loan_allot_id'";
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
<form name="form1" method="post" action="loan_allot_edit2.php">
<input type="hidden" value="<?php echo $row["loan_allot_id"]; ?>" name="loan_allot_id">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="342" height="289" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">LOAN ALLOT</div></td>
    </tr>
    <tr>
      <td>Loan </td>
      <td><select name="loan_id" id="loan_id">
        <option>select</option>
        <?php
		 include('dbconnect.php');
	
	$sql1="select * from loan_details";
	$res1=mysqli_query($conn,$sql1);
	while($row1=mysqli_fetch_array($res1))
	{
    ?>
        <option value="<?php echo $row1['loan_id']?>" <?php if($row1['loan_id']==$row['loan_id']) { ?> selected <?php } ?>><?php echo $row1['loan_name']?></option>
        <?php
	}
	?>
      </select></td>
    </tr>
    <tr>
      <td>Customer id </td>
      <td><select name="customer_id" id="customer_id">
        <option>select</option>
        <?php
		 include('dbconnect.php');
	
	$sql2="select * from customer_details";
	$res2=mysqli_query($conn,$sql2);
	while($row2=mysqli_fetch_array($res2))
	{
    ?>
        <option value="<?php echo $row2['customer_id']?>" <?php if($row2['customer_id']==$row['customer_id']) { ?> selected <?php } ?>><?php echo $row2['customer_full_name']?></option>
        <?php
	}
	?>
      </select></td>
    </tr>
    <tr>
      <td>Allot date</td>
      <td><input name="allot_date" type="date" class="validate[required,custom[date]]" id="allot_date" value="<?php echo $row["allot_date"];?>"></td>
    </tr>
    <tr>
      <td>Allot amt </td>
      <td><input name="allot_amt" type="text" class="validate[required,custom[onlyNumber]]" id="allot_amt" value="<?php echo $row["allot_amt"];?>"></td>
    </tr>
    <tr>
      <td>Duration(month)</td>
      <td><input name="duration" type="text" class="validate[required]" id="duration" value="<?php echo $row["duration(month)"];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit">        
          <input type="reset" name="Reset" value="Reset">      
      </div></td>
    </tr>
  </table>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
