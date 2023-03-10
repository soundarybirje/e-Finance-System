<?php
$pigmy_ins_rates_id=$_REQUEST['pigmy_ins_rates_id'];
include('dbconnect.php');
$sql="delete from pigmy_ins_rates   where pigmy_ins_rates_id='$pigmy_ins_rates_id'";
$res=mysqli_query($conn,$sql);
?>
<script>
alert("Values Deleted");
document.location="pigmy_ins_rates_view.php";
</script>