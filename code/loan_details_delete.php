<?php
$loan_id=$_REQUEST['loan_id'];
include('dbconnect.php');
$sql="delete from loan_details where loan_id='$loan_id'";
$res=mysql_query($sql);
?>
<script>
alert("Values Deleted");
document.location="loan_details_view.php";
</script>