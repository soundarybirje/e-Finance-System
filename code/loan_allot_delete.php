<?php
$loan_allot_id=$_REQUEST['loan_allot_id'];
include('dbconnect.php');
$sql="delete from  loan_allot where  loan_allot_id='$loan_allot_id'";
$res=mysql_query($sql);
?>
<script>
alert("Values Deleted");
document.location="loan_allot_view.php";
</script>
