<?php
$pigmy_agent_id=$_REQUEST['pigmy_agent_id'];
include('dbconnect.php');
$sql="delete from pigmy_agent  where pigmy_agent_id='$pigmy_agent_id'";
$res=mysqli_query($conn,$sql);
?>
<script>
alert("Values Deleted");
document.location="pigmy_agent_view.php";
</script>

