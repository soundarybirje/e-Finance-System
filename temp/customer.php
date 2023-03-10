<?php include('meta_tags.php');?>
<?php include('menus.php');?>
    
  
    <?php include('side_menu.php');?>
    
				<script>
function getPlan(val) {
	$.ajax({
	type: "POST",
	url: "getcity.php",
	data:'state_id='+val,
	success: function(data){
		$("#city-list").html(data);
	}
	});
}


</script>

    <div class="content">
        
<div class="header">
            
            <h1 class="page-title">Policy Holder Details</h1>
        </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
<?php include('val.php');?>
<?php include('cal.php'); ?>
<form action="customer_insert.php" method="post" enctype="multipart/form-data" name="formID" id="formID">
  <table width="765" height="531" align="center">
    <tr>
      <td width="168">Policy Holder Full Name</td>
      <td colspan="2"><input name="customer_full_name" type="text" id="customer_full_name" class="validate[required,custom[onlyLetter]]"></td>
      <td width="240">&nbsp;</td>
    </tr>
    <tr>
      <td>Gender</td>
      <td width="218"> <p>
              <input name="gender" type="radio" value="Male">
          Male 
    <input name="gender" type="radio" value="Female">
    Female</p>
        </td>
      <td width="119">DOB</td>
      <td><?php					
      $date_default = "";
     
      if(isset($row['date_of_birth']))
      {
        $date_default =$row['date_of_birth'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("date_of_birth", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  
	  $myCalendar->setYearInterval(1950, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->setonChange('call()');
	  $myCalendar->writeScript();	  
	  ?></td>
    </tr>
    <tr>
      <td>Age </td>
      <td><input name="age" type="text" id="age"></td>
      <td>Occupation</td>
      <td><input name="occupation" type="text" id="occupation" class="validate[required]"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td>      <textarea name="address" id="address" class="validate[required]"></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>State</td>
      <td><select name="state_id" id="state_id" onChange="getPlan(this.value);">
        <option>--select--</option>
		<?php
		include('dbconnect.php');
		$sql="select * from state";
		$res=mysql_query($sql);
		while($row=mysql_fetch_array($res))
		{
		
		?>
		<option value="<?php echo $row['state_id']; ?>">  <?php echo $row['state_name']; ?>  </option>
		<?php
		}
		?>
      </select></td>
      <td>City</td>
      <td><select name="city_id" id="city-list">
        <option>--select--</option>
      
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Contact number</td>
      <td><input name="contact_number" type="text" id="contact_number" class="validate[required,custom[mobile]]"></td>
      <td>Email-id</td>
      <td><input name="email_id" type="text" id="email_id" class="validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	<?php
	$sql1="select max(customer_id) from customer_det ";
		$res1=mysql_query($sql1);
		$row1=mysql_fetch_array($res1);
		 $cid=$row1[0]+1;
		$c_code=date('Y')."".$cid;
		?>
       

    <tr>
      <td>Customer code </td>
      <td><input name="customer_code" type="text" id="customer_code" value="<?php echo $c_code; ?>" readonly="" class="validate[required]"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Proof attachments</td>
      <td>      <input name="proof_attachments" type="file" id="proof_attachments"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset" class="btn"> 
      </div></td>
    </tr>
  </table>
</form>
<script>
function call()
{
dat=document.formID.date_of_birth.value;

d1=new Date(dat);
ye=d1.getYear()+1900;

d=new Date();
y=d.getYear()+1900;
	 
	 age=(y-ye);

document.formID.age.value = age;
}
</script>

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
      