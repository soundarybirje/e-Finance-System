<?php include('meta_tags.php');?>
<?php include('menus.php');?>
    
  
    <?php include('side_menu.php');?>
    

    <div class="content">
        
<div class="header">
            
            <h1 class="page-title">Loan Details</h1>
        </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
<?php include('val.php');?>
<form name="form1" id="formID" method="post" action="loan_details_insert.php">
  <p>&nbsp;</p>
  <table width="451" height="443" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">LOAN DETAILS </div></td>
    </tr>
    <tr>
      <td width="127">Loan name </td>
      <td width="314"><input name="loan_name" type="text" class="validate[required,custom[onlyLetter]]" id="loan_name"></td>
    </tr>
    <tr>
      <td>Loan desc</td>
      <td><textarea name="loan_desc" class="validate[required]" id="loan_desc"></textarea></td>
    </tr>
    <tr>
      <td>Loan duration </td>
      <td><input name="loan_duration" type="text" class="validate[required]" id="loan _duration"></td>
    </tr>
    <tr>
      <td>Loan interest</td>
      <td><input name="loan_interest" type="text" class="validate[required]" id="loan_interest"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input name="status" type="text" class="validate[required]" id="status"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">        
        <input type="reset" name="Reset" value="Reset"class="btn btn-danger">
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
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">?</button>
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
  
