<?php
$pigmy_collect_id=$_REQUEST['pigmy_collect_id'];
include('dbconnect.php');
$sql="delete from pigmy_collect  where pigmy_collect_id='$pigmy_collect_id'";
$res=mysqli_query($conn,$sql);
?>
<script>
alert("Values Deleted");
document.location="pigmy_collect_view.php";
</script>
