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
  
 $pigmy_collect_id=$_REQUEST['pigmy_collect_id'];
 
  $sql="select * from pigmy_collect where pigmy_collect_id='$pigmy_collect_id'";
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
<form name="form1" id="formID" method="post" action="pigmy_collect_edit2.php">
<input type="hidden" value="<?php echo $row["pigmy_collect_id"]; ?>" name="pigmy_collect_id">
  <p>&nbsp;</p>
  <table width="294" height="323" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">PIGMY COLLECT</div></td>
    </tr>
    <tr>
      <td>customer id </td>
      <td><select name="customer_id" id="customer_id">
        <option>select</option>
        <?php
		 include('dbconnect.php');
	
	$sql1="select * from customer_details";
	$res1=mysqli_query($conn,$sql1);
	while($row1=mysqli_fetch_array($res1))
	{
    ?>
        <option value="<?php echo $row1['customer_id']?>" <?php if($row1['customer_id']==$row['customer_id']) { ?> selected <?php } ?>><?php echo $row1['customer_full_name']?></option>
        <?php
	}
	?>
      </select></td>
    </tr>
    <tr>
      <td>collect amount</td>
      <td><input name="collect_amt" type="text" class="validate[required,custom[onlyNumber]]" id="collect_amt" value="<?php echo $row["collect_amt"];?>"></td>
    </tr>
    <tr>
      <td>collect date </td>
      <td><input name="collect_date" type="text" class="validate[required,custom[date]]" id="collect_date" value="<?php echo $row["collect_date"];?>"></td>
    </tr>
    <tr>
      <td>time</td>
      <td><input name="time" type="text" class="validate[required]" id="time" value="<?php echo $row["time"];?>"></td>
    </tr>
    <tr>
      <td>reference no. </td>
      <td><input name="references_no" type="text" class="validate[required]" id="references_no" value="<?php echo $row["references_no"];?>"></td>
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
