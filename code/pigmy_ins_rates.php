<?php include('meta_tags.php');?>
<?php include('menus.php');?>
    
  
    <?php include('side_menu.php');?>
    

    <div class="content">
        
<div class="header">
            
            <h1 class="page-title">Pigmy Agent Details</h1>
        </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
<?php include('val.php');?>
<form name="form1" id="formID" method="post" action="pigmy_ins_rate_insert.php">
  <p>&nbsp;</p>
  <p align="left">&nbsp;</p>
  <table width="404" height="315" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">PIGMY_INTEREST_RATES</div></td>
    </tr>
    <tr>
      <td width="149">pigmy interest name </td>
      <td width="239"><input name="pigmy_interest_name" type="text"  class="validate[required]" id="pigmy_interest_name"></td>
    </tr>
    <tr>
      <td>interest rate </td>
      <td><input name="interest_rate" type="text" class="validate[required]" id="interest_rate"></td>
    </tr>
    <tr>
      <td>duration</td>
      <td><input name="duration" type="text" class="validate[required]" id="duration"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btnclass btn-primary">        
          <input type="reset" name="Reset" value="Reset"class="btnclass btn-danger">
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
      
