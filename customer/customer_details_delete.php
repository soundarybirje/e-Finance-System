<?php
$customer_id=$_REQUEST['customer_id'];
include('dbconnect.php');
$sql="delete from customer_details where customer_id='$customer_id'";
$res=mysqli_query($conn,$sql);
?>
<script>
alert("Values Deleted");
document.location="customer_details_view.php";
</script>